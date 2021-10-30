OPCache Dashboard
===============

This bundle provides a simple OPCache dashboard for Symfony 3.4 and 4.4 upwards projects.

Documentation
-------------
### 1) Add XactOPCacheDashboard to your project

```bash
composer require xactsystems/opcache-dashboard
```

### 2) Add the routes for the scheduler admin views
config/routes.yaml
```yaml
opcache_dashboard:
    resource: "@XactOPCacheDashboard/Resources/config/routing.yaml"
```

### 3) Use the admin views
Browse to http://my-project/opcache-dashboard


Credits
-------

* Ian Foulds as the creator of this package.
* Carlos Beunosvinos (https://github.com/carlosbuenosvinos) for inspiration with opcache dashboard.

License
-------

This bundle is released under the MIT license. See the complete license in the
bundle:

[LICENSE](https://github.com/xactsystems/opcache-dashboard/blob/master/LICENSE)
