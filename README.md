<p align="center">
    <a href="https://sylius.com" target="_blank">
        <img src="https://demo.sylius.com/assets/shop/img/logo.png" />
    </a>
</p>

<h1 align="center">Google Ads Plugin</h1>

<p align="center">Track Google Ads orders into Sylius.</p>
<p align="center">/!\ Currently in alpha /!\</p>

## Quickstart


```
$ composer require ikuzostudio/google-ads-plugin
```

Add plugin dependencies to your `config/bundles.php` file:

```php
return [
  // ...
  Ikuzo\SyliusGoogleAdsPlugin\IkuzoSyliusGoogleAdsPlugin::class => ['all' => true],
];
```

Import required config in your `config/packages/_sylius.yaml` file:

```yaml
# config/packages/_sylius.yaml

imports:
  ...
  - { resource: "@IkuzoSyliusGoogleAdsPlugin/Resources/config/app/config.yaml"}
```


Extend your Order entity
```php
// [...]
use Sylius\Component\Core\Model\Order as BaseOrder;
use Ikuzo\SyliusGoogleAdsPlugin\Model\GoogleAdsOrderInterface;
use Ikuzo\SyliusGoogleAdsPlugin\Model\GoogleAdsOrderTrait;

/**
 * @ORM\Table(name="sylius_order")
 * @ORM\Entity()
 */
class Order extends BaseOrder implements GoogleAdsOrderInterface
{
    use GoogleAdsOrderTrait;
}
```


Update your database

```
$ bin/console doctrine:schema:update --force
```

