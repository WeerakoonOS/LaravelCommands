<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\User;

class TestController extends Controller
{
    public function index()
    {
        // $array = ['name' => 'salitha', 'job' => 'developer'];

        // $array = array_add($array, 'age', 24); 

        // $array = array_collapse([[1, 2, 3], [4, 5, 6], [7, 8, 9]]); 

        // [$keys, $values] = array_divide($array); 
        // print_r($keys);
        // print_r($values);

        // $array = array_dot(['foo' => ['bar' => 'baz']]);
        
        // $array = array_except($array, ['name']);

        // $array = [100, 200, 300];

        // $value = array_first($array, function ($value, $key) {
        //     return $value >= 150;
        // });

        $value = array_first($array, function ($value, $key) {
            return $value;
        });

        // $value = array_first($array, function ($value) {
        //     return $value;
        // });
        // print_r($value);

        // $array = ['name' => 'Joe', 'languages' => ['PHP', 'Ruby']];
        // $array = array_flatten($array);

        // $array = ['products' => ['desk' => ['price' => 100]]];

        // array_forget($array, 'products.desk');
        // $value = array_get($array, 'products.desk');
        // print_r($value);

        // $array = ['product' => ['name' => 'desk', 'price' => 100]];
        // $hasItem = array_has($array, 'product.name');
        // print_r($hasItems);
       
        // $array = [100, 200, 300, 110]; 
        // $value = array_last($array, function ($value, $key) {      
        //       return $value;      
        // }); 
        // print_r($value);

        // $array = ['name' => 'Desk', 'price' => 100, 'orders' => 10];
        // $array = array_only($array, ['name', 'price']); 
       
        // $array = [ 
        //     ['developer' => ['id' => 1, 'name' => 'salitha']],
           
        //     ['developer' => ['id' => 2, 'name' => 'pool']],
        // ];
        // $array = array_pluck($array, 'developer.name', 'developer.id');

        // $array = ['one', 'two', 'three', 'four'];
        // $array = array_prepend($array, 'zero');   
        
        // $array = ['name' => 'Desk', 'price' => 100];
        // $name = array_pull($array, 'name'); 
       
        // $array = ['products' => ['desk' => ['price' => 100]]];
        // $array = array_set($array, 'products.desk.price', 300);
       
        // $array = [['name' => 'abc'],['name' => 'def']];
        // $array = array_values(array_sort($array, function ($value) {
        //            return $value['name'];
        // }));
           
        //     $array = [ 
        //         [
        //                'Roman',
        //                'Taylor',
        //                'Li',
        //         ], 
        //         [ 
        //                'PHP',
        //                'Ruby',
        //                'JavaScript', 
        //         ], 
        //   ]; 
        //   $array = array_sort_recursive($array); 

        // $array = [100, '200', 300, '400', 500];
        // $array = array_where($array, function ($value, $key) {
        //      return is_string($value);
        // });

        // $string = 'Laravel';
        // $array = array_wrap($string);
    
        // $array = [100, 200, 300];
        // $first = head($array);
    
        // $array = [100, 200, 300];
        // $last = last($array);
    
        // echo '<pre>';
        // print_r($array);
        // echo '</pre>';

        // ===============================

        // echo app_path(); echo '<br>';
        // echo base_path(); echo '<br>';
        // echo config_path(); echo '<br>';
        // echo database_path(); echo '<br>';
        // echo public_path(); echo '<br>';
        // echo resource_path();
        
        // ===============================
        
        // must provide a underscore
        // $camel = camel_case('foo_bar'); 
        // echo $camel;
        // echo '<br>';
        // // Kebab -> dash version
        // // must provide a second word with a capital letter
        // $kebab = kebab_case('fooBar');
        // echo $kebab;
        // echo '<br>';
        // // Snake -> underscore version
        // // must provide a second word with a capital letter
        // $snake = snake_case('fooBar');
        // echo $snake;
        // echo '<br>';
        // // Studly -> Double Capital version
        // // must provide a second word with a capital letter
        // $studly = studly_case('foo-bar'); // only first letter capital
        // $studly = studly_case('foo_bar'); // both letters capital
        // $studly = studly_case('foo-bar'); // both letters capital
        // echo $studly;
        // echo '<br>';
        // // Title -> make all words with a first capital letter
        // // must provide a second word with a capital letter
        // $title = title_case('a nice title uses the correct case');
        // echo $title;
        // echo '<br>';
        
        // $value = str_limit('The PHP framework for web artisans.', 7);
        // echo $value;
        // echo '<br>';

        // $value = starts_with('This is my name', 'This'); 
        // var_dump($value);
        // echo '<br>';

        // $value = str_after('This is: a test', 'This is:');
        // echo $value;
        // echo '<br>';

        // $value = str_contains('This is my name', 'my');
        // var_dump($value);
        // echo '<br>';

        // $value = str_contains('This is my name', ['my', 'foo']);
        // var_dump($value);
        // echo '<br>';

        // $string1 = str_finish('this/string', '/'); 
        // $string2 = str_finish('this/string/', '/'); // if already there, not append
        // echo $string1;
        // echo '<br>';
        // echo $string2;
        // echo '<br>';
       
        // $value1 = str_is('foo*', 'foobar'); 
        // $value2 = str_is('fee*', 'foobar'); 
        // var_dump($value1);
        // echo '<br>';
        // var_dump($value2);
        // echo '<br>';

        // $plural = str_plural('child');
        // echo $plural;
        // echo '<br>';

        // $plural = str_plural('child', 2);
        // $plural = str_plural('child', 1); 
        // echo $plural;
        // echo '<br>'; 

        // $string = str_random(40); 
        // echo $string;
        // echo '<br>';

        // $singular = str_singular('cars');
        // echo $singular;
        // echo '<br>';

        // $title = str_slug('Laravel 5 Framework', '-'); 
        // echo $title;
        // echo '<br>';

        // echo trans('validation.required');
        // $value = trans_choice('foo.bar', 3); 
        // echo $value;

        // $class = class_basename('Foo\Bar\Baz');
        // echo $class;
        // echo '<br>';
        // echo e('<html>foo</html>'); 
        /*{{ text }} ->compile-> <?php echo e(text) ?> */
        // echo '<br>';
        // $value = ends_with('This is my name', 'name');
        // var_dump($value);

        // return view('welcome');

		// ===============================================	

        // $value = cache('key', 'default'); 
        // echo $value;
       	// echo '<br>';

       	// cache(['key' => 'xxx'], 5);
        // echo cache('key');
       	// echo '<br>';

		// $collection = collect(['taylor', 'abigail']); 
		// echo $collection;
		// echo '<br>';

 		// $value = config('app.timezone'); 
 		// 	$value = config('app.url'); 
		// echo $value;
		// echo '<br>';

		// $token = csrf_token();
		// echo $token;
		// echo '<br>'; 

    	// $env = env('APP_ENV');
 	 	// echo $env;
		// echo '<br>';

		// info('See this log now'); //see the log file in storage/logs/laravel.log

		// logger('See this log now'); //see the log file in storage/logs/laravel.log

		// logger()->error('You are not allowed here.');


		// return redirect('/test');

		// return redirect()->route('helloGuys'); 

		// session(['chairs' => 7, 'instruments' => 3]); 
		// echo session('chairs');

		// $value = session()->get('chairs');
		// echo $value;
		// session()->put('chairs', 10); 
		// echo session('chairs');


    }

    public function url_check()
    {
    	// action url
    	// action + parameter
    	// asset url
    	// secure asset url
    	// route()
    	// url()
    	// secure_url()

        echo url()->current(); echo '<br>';
        echo url()->full(); echo '<br>';
        echo url()->previous(); 
        // echo '<br>';
        // echo url('appendigPart');
        // echo '<br>';
        // echo url('appendigPart', [3]);
        // echo secure_url('user/profile');
        // echo '<br>';
        // echo secure_url('user/profile', [1]); 
        // return back();

    }

    public function error_check()
    {
    //    $text = "hello";

    //    if($text == 'hello guys') {
    //        return 'ok';
    //    }
    //    else {
    //     abort(401, 'Text value is not given as hello guys'); 
    //    }

    // abort_if(!$text == 'hello', 403);
    // abort_unless($text == 'hello', 403);
    // return 'Do not abort';

    }
}
