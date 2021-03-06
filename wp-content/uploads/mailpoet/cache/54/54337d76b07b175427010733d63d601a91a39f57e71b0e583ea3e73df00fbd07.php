<?php

/* newsletter/templates/components/sidebar/styles.hbs */
class __TwigTemplate_f6a39d481e32d4532ef248bc91f9babbe85b7c49eb3e12ddb9ca48ddd83f8896 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"handlediv\" title=\"";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Click to toggle");
        echo "\"><br></div>
<h3>";
        // line 2
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Styles");
        echo "</h3>
<div class=\"mailpoet_region_content\">
    <form id=\"mailpoet_newsletter_styles\" action=\"\" method=\"post\" accept-charset=\"utf-8\">
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"text-color\" value=\"{{ model.text.fontColor }}\" id=\"mailpoet_text_font_color\"></span>
            </span>
            <select id=\"mailpoet_text_font_family\" name=\"text-family\" class=\"mailpoet_font_family mailpoet_select mailpoet_select_medium\">
            {{#each availableStyles.fonts}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.text.fontFamily}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select>
            <select id=\"mailpoet_text_font_size\" name=\"text-size\" class=\"mailpoet_font_size mailpoet_select mailpoet_select_small\">
            {{#each availableStyles.textSizes}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.text.fontSize}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select> ";
        // line 18
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Text");
        echo "
        </div>
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"h1-color\" value=\"{{ model.h1.fontColor }}\" id=\"mailpoet_h1_font_color\"></span>
            </span>
            <select id=\"mailpoet_h1_font_family\" name=\"h1-family\" class=\"mailpoet_font_family mailpoet_select mailpoet_select_medium\">
            {{#each availableStyles.fonts}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.h1.fontFamily}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select>
            <select id=\"mailpoet_h1_font_size\" name=\"h1-size\" class=\"mailpoet_font_size mailpoet_select mailpoet_select_small\">
            {{#each availableStyles.headingSizes}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.h1.fontSize}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select> ";
        // line 33
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 1");
        echo "
        </div>
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"h2-color\" value=\"{{ model.h2.fontColor }}\" id=\"mailpoet_h2_font_color\"></span>
            </span>
            <select id=\"mailpoet_h2_font_family\" name=\"h2-family\" class=\"mailpoet_font_family mailpoet_select mailpoet_select_medium\">
            {{#each availableStyles.fonts}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.h2.fontFamily}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select>
            <select id=\"mailpoet_h2_font_size\" name=\"h2-size\" class=\"mailpoet_font_size mailpoet_select mailpoet_select_small\">
            {{#each availableStyles.headingSizes}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.h2.fontSize}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select> ";
        // line 48
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 2");
        echo "
        </div>
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"h3-color\" value=\"{{ model.h3.fontColor }}\" id=\"mailpoet_h3_font_color\"></span>
            </span>
            <select id=\"mailpoet_h3_font_family\" name=\"h3-family\" class=\"mailpoet_font_family mailpoet_select mailpoet_select_medium\">
            {{#each availableStyles.fonts}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.h3.fontFamily}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select>
            <select id=\"mailpoet_h3_font_size\" name=\"h3-size\" class=\"mailpoet_font_size mailpoet_select mailpoet_select_small\">
            {{#each availableStyles.headingSizes}}
                <option value=\"{{ this }}\" {{#ifCond this '==' ../model.h3.fontSize}}SELECTED{{/ifCond}}>{{ this }}</option>
            {{/each}}
            </select> ";
        // line 63
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Heading 3");
        echo "
        </div>
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"link-color\" value=\"{{ model.link.fontColor }}\" id=\"mailpoet_a_font_color\"></span>
            </span>";
        // line 68
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Links");
        echo " <label><input type=\"checkbox\" name=\"underline\" value=\"underline\" id=\"mailpoet_a_font_underline\" {{#ifCond model.link.textDecoration '==' 'underline'}}CHECKED{{/ifCond}} class=\"mailpoet_option_offset_left_small\"/> ";
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Underline");
        echo "</label>
        </div>
        <hr />
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"newsletter-color\" value=\"{{ model.wrapper.backgroundColor }}\" id=\"mailpoet_newsletter_background_color\"></span>
            </span>";
        // line 74
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Newsletter");
        echo "
        </div>
        <div class=\"mailpoet_form_field\">
            <span>
                <span><input type=\"text\" class=\"mailpoet_color\" size=\"6\" maxlength=\"6\" name=\"background-color\" value=\"{{ model.body.backgroundColor }}\" id=\"mailpoet_background_color\"></span>
            </span>";
        // line 79
        echo $this->env->getExtension('MailPoet\Twig\I18n')->translate("Background");
        echo "
        </div>
    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/sidebar/styles.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 79,  116 => 74,  105 => 68,  97 => 63,  79 => 48,  61 => 33,  43 => 18,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "newsletter/templates/components/sidebar/styles.hbs", "/home/d/dyachezy/tvoymirsporta.ru/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/components/sidebar/styles.hbs");
    }
}
