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
    if($this->do_href($element))
    {
      $element->set('attribute/href', wfRequest::$url_i18n.$element->get('attribute/href'));
    }
    /**
     * 
     */
    return $element->get();
  }
  private function do_href($element){
    if(
      $element->get('type')=='a' && 
      !$element->get('settings/i18n_url_rewrite_omit') && 
      $element->get('attribute/href') && 
      wfPhpfunc::substr($element->get('attribute/href'), 0, 1)!='#' &&
      wfPhpfunc::substr($element->get('attribute/href'), 0, 7)!='mailto:' &&
      wfPhpfunc::substr($element->get('attribute/href'), 0, 11)!='javascript:' && 
      wfPhpfunc::substr($element->get('attribute/href'), 0, 5)!='http:' && 
      wfPhpfunc::substr($element->get('attribute/href'), 0, 6)!='https:' &&
      strtolower(wfPhpfunc::substr($element->get('attribute/href'), -4)) != '.pdf'
      )
    {
      return true;
    }else{
      return false;
    }
  }
}