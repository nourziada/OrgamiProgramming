<?php

namespace App\Widgets;

use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use Auth;

class Products extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = \App\Product::count();
        $string = 'المنتجات';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-diamond',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => 'مشاهدة كل المنتجات',
                'link' => route('voyager.products.index'),
            ],
            'image' => '/products.jpeg',
        ]));
    }

    public function shouldBeDisplayed()
    {
        return Auth::user()->can('browse', app(\App\Product::class));
    }
}
