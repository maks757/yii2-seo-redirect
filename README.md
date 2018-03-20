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
    'as seoRedirect' => [
        'class' => 'maks757\seoredirect\components\SeoRedirectComponent',
    ],
```

#### routes

```text
Link: site.com/admin/redirect
```
