<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/contrib/bootstrap5_admin/templates/form/form-element.html.twig */
class __TwigTemplate_2129abcdd381e57961a41dd51dde050a extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 48
        $context["classes"] = ["js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 51
($context["type"] ?? null))), ("form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 52
($context["type"] ?? null))), (((($tmp =         // line 53
($context["name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("js-form-item-" . \Drupal\Component\Utility\Html::getClass(($context["name"] ?? null)))) : ("")), (((($tmp =         // line 54
($context["name"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (("form-item-" . \Drupal\Component\Utility\Html::getClass(($context["name"] ?? null)))) : ("")), ((!CoreExtension::inFilter(        // line 55
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((CoreExtension::inFilter(        // line 56
($context["title_display"] ?? null), ["after", "before"]) && !CoreExtension::inFilter(($context["type"] ?? null), ["radio", "radios", "checkbox", "checkboxes"]))) ? ("mb-2") : ("")), (((CoreExtension::inFilter(        // line 57
($context["title_display"] ?? null), ["after", "before"]) && CoreExtension::inFilter(($context["type"] ?? null), ["radio", "radios", "checkbox", "checkboxes"]))) ? ("form-check") : ("")), ((CoreExtension::inFilter(        // line 58
($context["type"] ?? null), ["checkbox", "checkboxes"])) ? ("form-switch") : ("")), (((        // line 59
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), (((($tmp =         // line 60
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-item--error") : ("")), ((((        // line 61
($context["type"] ?? null) == "item") && ($context["name"] ?? null))) ? ("row") : ("")), ((CoreExtension::inFilter(        // line 62
($context["label_display"] ?? null), ["inline"])) ? ("container-fluid") : (""))];
        // line 66
        $context["description_classes"] = ["description", "form-text", (((        // line 69
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 72
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 72), "html", null, true);
        yield ">
  ";
        // line 73
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["inline", "before", "invisible"])) {
            // line 74
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 76
        yield "  ";
        if (((($context["prefix"] ?? null) || ($context["suffix"] ?? null)) && !CoreExtension::inFilter(($context["name"] ?? null), ["label", "name", "settings-label", "site_frontpage"]))) {
            // line 77
            yield "  <div class=\"input-group\">
  ";
        }
        // line 79
        yield "  ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "    <span class=\"field-prefix ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($context["type"] ?? null) == "number") || ($context["prefix"] ?? null))) ? ("input-group-text") : ("form-text")));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 82
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 82))) {
            // line 83
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 83), "html", null, true);
            yield ">
      ";
            // line 84
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 84), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 87
        yield "  ";
        if ((($context["label_display"] ?? null) == "inline")) {
            // line 88
            yield "    <div class=\"col-auto\">
  ";
        }
        // line 90
        yield "  ";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
  ";
        // line 91
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 92
            yield "    <span class=\"field-suffix ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(((((($context["type"] ?? null) == "number") || ($context["suffix"] ?? null))) ? ("input-group-text") : ("form-text")));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 94
        yield "
  ";
        // line 95
        if (((($context["prefix"] ?? null) || ($context["suffix"] ?? null)) && !CoreExtension::inFilter(($context["name"] ?? null), ["label", "name", "settings-label", "site_frontpage"]))) {
            // line 96
            yield "  </div>
  ";
        }
        // line 98
        yield "  ";
        if ((($context["label_display"] ?? null) == "inline")) {
            // line 99
            yield "  </div>
  ";
        }
        // line 101
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 102
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 104
        yield "  ";
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "    <div class=\"form-item--error-message\">
      ";
            // line 106
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 109
        yield "  ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 109))) {
            // line 110
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 110), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 110), "html", null, true);
            yield ">
      ";
            // line 111
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 111), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 114
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "label_display", "description_display", "attributes", "label", "prefix", "suffix", "description", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap5_admin/templates/form/form-element.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  179 => 114,  173 => 111,  168 => 110,  165 => 109,  159 => 106,  156 => 105,  153 => 104,  147 => 102,  144 => 101,  140 => 99,  137 => 98,  133 => 96,  131 => 95,  128 => 94,  120 => 92,  118 => 91,  113 => 90,  109 => 88,  106 => 87,  100 => 84,  95 => 83,  92 => 82,  84 => 80,  81 => 79,  77 => 77,  74 => 76,  68 => 74,  66 => 73,  61 => 72,  59 => 69,  58 => 66,  56 => 62,  55 => 61,  54 => 60,  53 => 59,  52 => 58,  51 => 57,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  46 => 52,  45 => 51,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap5_admin/templates/form/form-element.html.twig", "D:\\wamp64\\www\\campus-project\\web\\themes\\contrib\\bootstrap5_admin\\templates\\form\\form-element.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 48, "if" => 73];
        static $filters = ["clean_class" => 51, "escape" => 72];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
