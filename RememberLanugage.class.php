<?php

namespace LanguageSaverForWpml;

class RememberLanguage
{
    /**
     * @var SitePress
     */
    private $sitePress;

    public function __construct()
    {
        global $sitepress;
        $this->sitePress = $sitepress;
        $this->currentUrl = rtrim(get_site_url() . $_SERVER['REQUEST_URI'], '/');
    }

    /**
     * Booth the application
     */
    public function boot()
    {
        $settings = $this->sitePress->get_option('urls');

        if(! $this->splashpage($settings)) {
            return;
        }

        if($this->currentUrl == get_site_url() && !isset($_COOKIE['td-lang'])) {
            return;
        }

        if(isset($_COOKIE['td-lang']) && $this->currentUrl == get_site_url()) {
            $url = get_site_url() . '/'. $_COOKIE['td-lang'];
            header("Location: $url");
            die();
        }

        if(in_array($this->sitePress->get_current_language(), $this->sitePress->get_option('hidden_languages'))) {
            unset($_COOKIE['td-lang']);
            return;
        }

        setcookie('td-lang', $this->sitePress->get_current_language(), time() + (3600 * 24 * 7 * 54), '/');
    }

    /**
     * Check if the user is working with a custom splash page.
     *
     * @param $settings
     * @return bool
     */
    private function splashpage($settings)
    {
        if(
            $settings['directory_for_default_language'] != true &&
            ($settings['show_on_root'] != 'html_file' || $settings['show_on_root'] != 'page')
        ) {
            return false;
        }

        return true;
    }
}