<?php

namespace App\Http\Controllers\Web;

use App\About;
use App\Articel;
use App\Banner;
use App\ClubImage;
use App\ClubName;
use App\EduVideo;
use App\News;
use App\Product;
use App\Publication;
use App\Slider;
use App\Team;
use App\Tranining;
use App\Volunteering;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function getProductDetails($id)
    {
        $active = 'products';
        return view('web.product',compact('active'));
    }
    public function getCommunityServicesDetails($id)
    {
        $active = 'community';
        $articel = Volunteering::findOrFail($id);
        $randomArticels = Volunteering::inRandomOrder()->take(3)->get();
        return view('web.articel-details',compact('active','articel','randomArticels'));
    }
    public function getCommunityServices()
    {
        $active = "community";
        $articels = Volunteering::orderBy('created_at','desc')->paginate(9);
        return view('web.articels',compact('active','articels'));
    }
    public function getVideos()
    {
        $active = 'videos';
        $videos = EduVideo::orderBy('created_at','desc')->get();
        return view('web.videos',compact('active','videos'));
    }
    public function getClub()
    {
        $active = 'club';
        $names = ClubName::get();
        $images = ClubImage::get();
        return view('web.club',compact('active','names','images'));
    }
    public function getTrainingId($id)
    {
        $active = 'training';
        $tr = Tranining::findOrFail($id);
        return view('web.training-details',compact('active','tr'));
    }
    public function getTraining()
    {
        $active = 'training';
        $trainers = Tranining::get();
        return view('web.training',compact('active','trainers'));
    }
    public function getTeams()
    {
        $active = 'teams';
        $teams = Team::get();
        return view('web.team',compact('active','teams'));

    }
    public function getNewsDetails($id)
    {
        $active = 'news';
        $articel = News::findOrFail($id);
        $randomArticels = News::inRandomOrder()->take(3)->get();
        return view('web.articel-details',compact('active','articel','randomArticels'));
    }
    public function getNews()
    {
        $active = 'news';
        $articels = News::orderBy('created_at','desc')->paginate(9);
        return view('web.articels',compact('active','articels'));
    }
    public function getPublications()
    {
        $active = "publications";
        $publications = Publication::orderBy('created_at','desc')->paginate(12);
        return view('web.publications',compact('active','publications'));
    }
    public function getArticleDetails($id)
    {
        $active = 'articles';
        $articel = Articel::findOrFail($id);
        $randomArticels = Articel::inRandomOrder()->take(3)->get();
        return view('web.articel-details',compact('active','articel','randomArticels'));
    }
    public function getArticles()
    {
        $active = 'articles';
        $articels = Articel::orderBy('created_at','desc')->paginate(9);
        return view('web.articels',compact('active','articels'));
    }
    public function getAbout()
    {
        $active = 'about';
        $abouts = About::get();
        return view('web.about',compact('active','abouts'));
    }

    public function index()
    {
        $active = 'index';
        $sliders = Slider::get();
        $news = News::orderBy('created_at','desc')->take(6)->get();
        $banners = Banner::get();
        $articels = Articel::orderBy('created_at','desc')->take(6)->get();
        $videos = EduVideo::orderBy('created_at','desc')->take(3)->get();

        $priceProducts1 = Product::orderBy('price','desc')->take(3)->get();
        $priceProducts2 = Product::orderBy('price','desc')->skip(3)->take(3)->get();

        $viewsProducts1 = Product::orderBy('views','desc')->take(3)->get();
        $viewsProducts2 = Product::orderBy('views','desc')->skip(3)->take(3)->get();

        $lastProducts1 = Product::orderBy('created_at','desc')->take(3)->get();
        $lastProducts2 = Product::orderBy('created_at','desc')->skip(3)->take(3)->get();


        return view('web.index',compact('sliders','news','banners','articels','videos','priceProducts1',
            'priceProducts2','viewsProducts1','viewsProducts2','lastProducts1','lastProducts2','active'));
    }
}
