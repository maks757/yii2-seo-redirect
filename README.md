# Seo redirect

#### Add to backend config

```php
'modules' => [
    'redirect' => [
        'class' => 'maks757\seoredirect\SeoRedirectModule',
    ]
    //...
],
```

#### and add to frontend config

```php
    'components' => [
        //...
    ],
    'on beforeAction' => function (){
        \maks757\seoredirect\components\SeoRedirectComponent::chackUrl();
    },
```

#### routes

```text
Link: site.com/admin/redirect
```