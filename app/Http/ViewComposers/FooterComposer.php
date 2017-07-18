<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\UserRepository;
use App\Models\Views\Vw_poll;
use App\Models\Views\Vw_answer;
use App\Models\Views\Vw_news;
use App\Models\Views\Vw_weblinks;
use App\Models\Link;
use App\Models\Views\Vw_filetype;

class FooterComposer
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
      $weblinks = Vw_weblinks::fromView()->get();
      return $view->with(compact('weblinks'));
    }
}
