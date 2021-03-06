<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Models\Views\Vw_category;
use App\Models\Language;
use App\Models\Banner;
use App\Models\Link;
use App\Models\Views\Vw_title;
use Session;
use Auth;
class MenuComposer
{
    /**
     * The user repository implementation.
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * Create a new profile composer.
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
      $cur_lang = Language::where('lang_key', Session::get('lang'))->first();
      $langs = Language::all();
      $categories = Vw_category::fromViewShowed()->orderBy('parent_id')->orderBy('order_num', 'asc');

      $banner = new Banner;
      $banner = $banner->orderBy('banner_id','desc')->first();

      $fb = Link::byType('facebook')->first();
      $tw = Link::byType('twitter')->first();

      $title = Vw_title::where('lang', \Session::get("lang"))->first();

      return $view->with(compact('categories', 'langs', 'cur_lang', 'banner','fb','tw', 'title'));
    }
}
