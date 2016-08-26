<?php

if ((string)Mage::getConfig()->getModuleConfig('Magerun_Reproduce')->active == 'true') {
    class Magerun_Reproduce2_Model_Rewrite_Enterprise_CmsConfigResolver extends Magerun_Reproduce_Model_Rewrite_Enterprise_CmsConfig {}
} else {
    class Magerun_Reproduce2_Model_Rewrite_Enterprise_CmsConfigResolver extends Enterprise_Cms_Model_Config {}
}
