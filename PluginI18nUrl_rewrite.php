<?php
class PluginI18nUrl_rewrite{
  public function event_rewrite($plugin, $element){
    /**
     * 
     */
    $element = new PluginWfArray($element);
    /**
     * 
     */
    if(
      $element->get('type')=='a' && 
      $element->get('attribute/href') && 
      $element->get('attribute/href')!='#'){
      $element->set('attribute/href', wfRequest::$url_i18n.$element->get('attribute/href'));
    }
    /**
     * 
     */
    return $element->get();
  }
}