<?php

namespace Zoba\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Zoba\StoreBundle\Entity\Category;
use Zoba\StoreBundle\Entity\Product;

class DefaultController extends Controller {

    public function indexAction(Request $request, $name) {
        return $this->render('StoreBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction() {

        $product = new Product();
        $product->setName('Pippo Pluto');
        $product->setPrice('19.99');
        $product->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush();

        return $this->render('StoreBundle:Default:create.html.php', array('product' => $product));
    }

    protected function _checkProduct($product, $id) {

        if (!$product) {
            throw $this->createNotFoundException('Nessun prodotto trovato per l\'id ' . $id);
        }
    }

    protected function _checkCategory($category, $id) {

        if (!$category) {
            throw $this->createNotFoundException('Nessuna categoria trovata per l\'id ' . $id);
        }
    }

    public function showAction(Request $request, $id) {

        $product = $this->getDoctrine()
                ->getRepository('StoreBundle:Product')
                ->findOneByIdJoinedToCategory($id);

        // cerca per chiave primaria (di solito "id")
        //$product = $repository->find($id);
        // nomi di metodi dinamici per cercare in base al valore di una colonna
        //$product = $repository->findOneById($id);
        //$product = $repository->findOneByName('pippo');
        // trova *tutti* i prodotti
        // $products = $repository->findAll();
        // trova un gruppo di prodotti in base a un valore arbitrario di una colonna
        // $products = $repository->findByPrice(19.99);
        // cerca un prodotto in base a nome e prezzo
        //$product = $repository->findOneBy(array('name' => 'pippo', 'price' => 19.99));
        // cerca tutti i prodotti in base al nome, ordinati per prezzo
        //$product = $repository->findBy(array('name' => 'pippo'), array('price' => 'ASC'));

        $this->_checkProduct($product, $id);

        $category = $product->getCategory();

        $this->_checkCategory($category, $id);

        return $this->render('StoreBundle:Default:show.html.php', array('product' => $product, 'category' => $category));
    }

    public function showAllAction(Request $request) {

        $products = $this->getDoctrine()
                ->getRepository('StoreBundle:Product')
  //               ->findAllOrderedByName();
               ->findAllOrderedByNameJoinedToCategory();
        
        return $this->render('StoreBundle:Default:show-all.html.php', array('products' => $products));
    }

    public function updateAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('StoreBundle:Product')->find($id);

        $this->_checkProduct($product, $id);

        $product->setName('Nome del nuovo prodotto!');
        $em->flush();

        return $this->redirect($this->generateUrl('store_show', array('id' => $id)));
    }

    public function updateProductRatingAction(Request $request) {

        $id = $request->request->get('idBox');
        $rating = $request->request->get('rate');
        
        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('StoreBundle:Product')->find($id);

        $this->_checkProduct($product, $id);

        $new_rating = ($product->getRating() + $rating) / ($product->getRateNumber() + 1);
        $product->setRating($new_rating);
        $product->setRateNumber($product->getRateNumber() + 1);
        $em->flush();

        $json_response = array();
        $json_response['id'] = $id;
        $json_response['message'] = 'Your rate has been successfuly recorded. Thanks for your rate :)';
        return new Response(json_encode($json_response));
    }

    public function removeAction(Request $request, $id) {

        $em = $this->getDoctrine()->getEntityManager();
        $product = $em->getRepository('StoreBundle:Product')->find($id);

        $this->_checkProduct($product, $id);

        $name = $product->getName();

        $em->remove($product);
        $em->flush();

        return $this->render('StoreBundle:Default:removed.html.php', array('name' => $name));
    }

    public function createProductAction() {

        $category = new Category();
        $category->setName('Prodotti principali');

        $product = new Product();
        $product->setName('Pippo');
        $product->setPrice(19.99);
        $product->setDescription('Pipponeeeee!!!!');
        // correlare questo prodotto alla categoria
        $product->setCategory($category);

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($category);
        $em->persist($product);
        $em->flush();

        return $this->render('StoreBundle:Default:product-created.html.php', array('product' => $product, 'category' => $category));
    }

}
