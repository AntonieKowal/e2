<?php
namespace App\Controllers;

# Products class is no longer needed for retrieving the data
// use App\Products;

class ProductController extends Controller
{
    private $products;

    public function __construct($app)
    {
        parent::__construct($app);
    }

    public function index()
    {
        $products = $this->app->db()->all("products");

        return $this->app->view("products.index", [
            'products' => $products
        ]);
    }

    public function show()
    {
        $id = $this->app->param("id");

        if (is_null($id)) {
            $this->app->redirect('/products');
        }

        // $product = $this->products->getById($id);
        $product = $this->app->db()->findById("products", $id);

        if (is_null($product)) {
            return $this->app->view("products.missing", [
            "id" => $id]);
        }

        # load the review details
        $reviews = $this->app->db()->findByColumn("reviews", "product_id", "=", $id);

        $confirmationName = $this->app->old('confirmationName');

        return $this->app->view("products.show", [
            "product" => $product,
            "reviews" => $reviews,
            "confirmationName" => $confirmationName
        ]);
    }

    public function saveReview()
    {
        $this->app->validate([
            'name' => 'required',
            'content' => 'required|minLength:200',
        ]);

        $name = $this->app->input('name');
        $content = $this->app->input('content');
        $id = $this->app->input('id');

        # insert into the db
        $data = [
            "name" => $name,
            "content" => $content,
            "product_id" => $id,
        ];

        $this->app->db()->insert("reviews", $data);

        $this->app->redirect('/product?id='.$id, ['confirmationName' => $name]);
    }
}
