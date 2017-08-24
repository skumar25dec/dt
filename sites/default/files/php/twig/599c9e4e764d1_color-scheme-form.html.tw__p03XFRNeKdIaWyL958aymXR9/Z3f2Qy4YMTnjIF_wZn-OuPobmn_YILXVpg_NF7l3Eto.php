<?php

/* core/modules/color/templates/color-scheme-form.html.twig */
class __TwigTemplate_25b80df9c95f1d18edbb3d712c7a727d20045e348e61690bb5b376b1c0509ba1 extends Twig_Template
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
        $tags = array();
        $filters = array("without" => 23, "t" => 24);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('without', 't'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        echo "<div class=\"color-form clearfix\">
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "scheme", array()), "html", null, true));
        echo "
  <div class=\"clearfix color-palette js-color-palette\">
    ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "palette", array()), "html", null, true));
        echo "
  </div>
  ";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["form"]) ? $context["form"] : null), "scheme", "palette"), "html", null, true));
        echo "
  <h2>";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Preview")));
        echo "</h2>
  ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["html_preview"]) ? $context["html_preview"] : null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "core/modules/color/templates/color-scheme-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 25,  60 => 24,  56 => 23,  51 => 21,  46 => 19,  43 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a theme's color form.
 *
 * Available variables:
 * - form: Form elements for the color scheme form, including:
 *   - scheme: A color scheme form element. For example: a select element with
 *     color theme presets, or a color picker widget.
 *   - palette: Color fields that can be changed by entering in a new hex value.
 * - html_preview: A HTML preview of the theme's current color scheme.
 *
 * @see template_preprocess_color_scheme_form()
 *
 * @ingroup themeable
 */
#}
<div class=\"color-form clearfix\">
  {{ form.scheme }}
  <div class=\"clearfix color-palette js-color-palette\">
    {{ form.palette }}
  </div>
  {{ form|without('scheme', 'palette') }}
  <h2>{{ 'Preview'|t }}</h2>
  {{ html_preview }}
</div>
";
    }
}
