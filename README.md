# Buto-Plugin-I18nUrl_rewrite
Handle attribute href for a tags by add I18N prefix. 

## Theme settings
Check Settings/Theme/I18N documentation of Buto, the url parameter. 

## Settings
Add this to theme settings file.
```
events:
  document_render_element:
    -
      plugin: 'i18n/url_rewrite'
      method: 'rewrite'
```
