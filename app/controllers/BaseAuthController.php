<?php

class BaseAuthController extends Controller {


    public function check(){
        if ( ! Sentry::check())
        {
            $this->layout = null;
            return Redirect::action('HomeController@index')->with('message', "<div class='alert alert-danger'>You don't have access to this page.</div>");
        }
    }

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
            if (!is_null($this->layout)) {
                $this->layout = View::make($this->layout);
            }
	}

}
