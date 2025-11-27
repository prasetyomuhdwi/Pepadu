<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavBar extends Component
{
    private string $infoUpdate;

    private string $logoHorizontal;

    private array $navMenu;

    public function __construct(string $infoUpdate, ?string $logo, ?array $navMenu)
    {
        $this->infoUpdate = $infoUpdate;
        $this->navMenu = $navMenu;
        $this->logoHorizontal = $logo == '' ? asset('/img/logo-horizontal.svg') : $logo;
    }

    public function getLogo()
    {
        return $this->logoHorizontal;
    }

    public function getInfoUpdate()
    {
        return $this->infoUpdate;
    }

    public function getNavMenu()
    {
        return $this->navMenu;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.default', [
            'infoUpdate' => $this->getInfoUpdate(),
            'logo' => $this->getLogo(),
            'navMenu' => $this->getNavMenu(),
        ]);
    }
}
