Laravel APIs bouwen en testen  
  
Methode 1 - Saloon  
Met de Saloon Laravel plugin 
Voor dit voorbeeld gebruik ik de API van Schiphol:  
Application ID      15275821  
Application Keys    608baa143dc406bcffa0ce7e0347ecab  
  
> composer create-project laravel/laravel api-opdract  
> npm install  
  
> php artisan key:generate  

> composer require saloonphp/laravel-plugin  
> php artisan vendor:publish --tag=saloon-config  
> composer require saloonphp/laravel-http-sender  
  
  


🔌 Connectors  
Connectors zijn klassen die de eigenschappen van een API-integratie definieren, zoals de URL en headers.  
Je moet voor elke API-integratie een aparte connector hebben.  

Getting Started  
We beginnen met het maken van een nieuwe folder waar we alle API connectors in zullen bewaren.  
    📁 App/Http/Integrations  

Maak een klasse aan die de connector klasse extend.  
> php artisan saloon:connector  
  
Na het aanmaken van een connector klasse kun je de code van de website plakken;  
<?php  
  
use Saloon\Http\Connector;  
  
class ForgeConnector extends Connector  
{  
    public function resolveBaseUrl(): string  
    {  
        return 'https://forge.laravel.com/api/v1';  
    }  
}  
  
Nu moeten we een request klasse maken, in de Saloon request klasse word de informatie opgeslagen voor een API request.  

> php artisan saloon:request Flights AllFlightsConnector  