<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $active;
    public $options;
    
    public function __construct($active)
    {
        $this->active = $active;
        $this->options = [
            'dashboard' => [
                'name' => 'dashboard',
                'title' => 'Dashboard',
                'url' => route('dashboard.page'),
                'icon' => 'fa-dashboard'
            ],
            'accounts' => [
                'name' => 'accounts',
                'title' => 'Cuentas',
                'url' => route('dashboard.page'),
                'icon' => 'fa-book-open'
            ],
            'books' => [
                'name' => 'books',
                'title' => 'Libros',
                'url' => route('dashboard.page'),
                'icon' => 'fa-book'
            ],
            'financial_statements' => [
                'name' => 'financial_statements',
                'title' => 'Estados Financieros',
                'url' => route('dashboard.page'),
                'icon' => 'fa-chart-simple'
            ],
            'periods' => [
                'name' => 'periods',
                'title' => 'Periodos',
                'url' => route('dashboard.page'),
                'icon' => 'fa-calendar'
            ],
            'configuration' => [
                'name' => 'configuration',
                'title' => 'configuracion',
                'url' => route('dashboard.page'),
                'icon' => 'fa-cog'
            ]
        ];
    }

    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
