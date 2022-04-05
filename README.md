# Buto-Plugin-I18nUrl_rewrite
Handle attribute href for a tags by add I18N prefix. 

## Theme settings
Check Settings/Theme/I18N documentation of Buto, the url parameter. 

## Event
Add this to theme settings file.
````
events:
  document_render_element:
    -
      plugin: 'i18n/url_rewrite'
      method: 'rewrite'
````

## Element
One could omit this on a element. Could be handy if the link is to other language.
````
type: a
settings:
  i18n_url_rewrite_omit: true
innerHTML: English
attribute:
  href: /en
````
