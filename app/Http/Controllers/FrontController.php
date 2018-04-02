<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;


class FrontController extends Controller
{
    private $extract,
            $path,
            $isDesktop;


    public function __construct(ExtractAgent $ext, Request $request){
        $this->extract = $ext;
        /*$scripts = $this->extract->getBlock('scripts');
        view()->share([
            'scripts' => $scripts,
        ]);*/

        $userAgent = $request->server('HTTP_USER_AGENT');
        $isDesktop = stripos($userAgent, 'Mobile') === false;
        $this->isDesktop = $isDesktop;
        if ($isDesktop) {
            $this->path = 'front.desktop.';
        } else {
            $this->path = 'front.mobile.';
        }
    }


    public function getIndex(){
        return view($this->path.'index.index', []);
    }

    public function getPublication(){
        return view($this->path.'publication.publication', [
        ]);
    }

    public function getPublications(){
        return view($this->path.'publications.publications', [
        ]);
    }
}