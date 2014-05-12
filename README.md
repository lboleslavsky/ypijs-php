Your Presentation Interface add-on for Nette Framework
===================

Package Content
-------------------

**Ypi**
- Core scripts, you can use it without Nette

**YpiControl**
- Controls for nette 

**js**
- Ypi javascript files (copy into your {base_dir}/js dir)

**css**
- Stylesheet files (copy into your {base_dir}/css dir)

**presenters**
- Demo presenters for Nette Framework.

**templates**
- Templates for Nette presenters.

Installation 
-------------------

- Get Nette Framework version: +2.0 
- At first copy module to app folder of your skeleton application. Then copy YpiBaseModule/css/* to {base_dir}/css and YpiBaseModule/js/* to {base_dir}/js folder. 
Depends on your current Nette installation {base_dir} should be where Nette index.php is. Then copy XML dialog definition file to {base_dir}. 

Corresponding settings:
-------------------

**INpcPresenter:**

```php
const SCRIPT_CHAPTER_URL = '../welcome.xml';
const SCRIPT_YPI_MIN_URL = '../js/ypi_min-1.5.5.js';
const SCRIPT_HELPER_URL= '../js/helper.js';
```

Now register route for NpcPresenter in 
**Nette router factory:**

```php
$router[] = new Route('<presenter>/<action>[/<id>]', 'Npc:default');
```

And when it is all done type to your browser: "{nette_public_www_url}/npc/"
