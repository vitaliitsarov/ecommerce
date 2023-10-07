<?php

namespace App\Livewire;

use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Models\Carrier;
use App\Models\Country;

class Checkout extends Component
{
    #[Rule('required|min:3')]
    public $first_name = '';
    
    #[Rule('required')] 
    public $last_name = '';

    #[Rule('required')] 
    public $email = '';

    #[Rule('required')] 
    public $phone = '';

    #[Rule('required')] 
    public $country = '';

    #[Rule('required')] 
    public $city = '';

    #[Rule('required')] 
    public $postal_code = '';

    #[Rule('required')] 
    public $address1 = '';

    #[Rule('required')] 
    public $address2 = '';


    public $total = 0;

    public function save()
    {
        $this->validate(); 
 
        return $this->redirect('/checkout');
    }

    public function render()
    {   

        $carriers = Carrier::get();
        $countries = Country::get();

        return view('livewire.checkout', [
            'carriers' => $carriers,
            'countries' => $countries
        ]);
    }
}
