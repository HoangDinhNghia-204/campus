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

/* themes/contrib/bootstrap5_admin/templates/misc/details.html.twig */
class __TwigTemplate_2994a78acf18531978473010e3ea2c56 extends Template
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
        // line 28
        $context["classes"] = ["card details mt-1 mb-1", (((($tmp =         // line 30
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details--accordion") : ("")), (((($tmp =         // line 31
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details--accordion-item") : ("")), (((($tmp = (($_v0 =         // line 32
($context["element"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details--package-listing") : (""))];
        // line 36
        $context["content_wrapper_classes"] = ["card-body bootstrap-details__wrapper", "details-wrapper", (((($tmp =         // line 39
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__wrapper--accordion") : ("")), (((($tmp =         // line 40
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__wrapper--accordion-item") : ("")), (((($tmp = (($_v1 =         // line 41
($context["element"] ?? null)) && is_array($_v1) || $_v1 instanceof ArrayAccess && in_array($_v1::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v1["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 41))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__wrapper--package-listing") : (""))];
        // line 45
        $context["inner_wrapper_classes"] = ["bootstrap-details__content", (((($tmp =         // line 47
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__content--accordion") : ("")), (((($tmp =         // line 48
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__content--accordion-item") : ("")), (((($tmp = (($_v2 =         // line 49
($context["element"] ?? null)) && is_array($_v2) || $_v2 instanceof ArrayAccess && in_array($_v2::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v2["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 49))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__content--package-listing") : (""))];
        // line 52
        yield "<details";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 52), "html", null, true);
        yield ">";
        // line 53
        if ((($tmp = ($context["title"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            $context["summary_classes"] = ["card-header bootstrap-details__summary", (((($tmp =             // line 57
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("js-form-required") : ("")), (((($tmp =             // line 58
($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-required") : ("")), (((($tmp =             // line 59
($context["accordion"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__summary--accordion") : ("")), (((($tmp =             // line 60
($context["accordion_item"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__summary--accordion-item") : ("")), (((($tmp = (($_v3 =             // line 61
($context["element"] ?? null)) && is_array($_v3) || $_v3 instanceof ArrayAccess && in_array($_v3::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v3["#module_package_listing"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["element"] ?? null), "#module_package_listing", [], "array", false, false, true, 61))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("bootstrap-details__summary--package-listing") : (""))];
            // line 65
            yield "    <summary";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [($context["summary_classes"] ?? null)], "method", false, false, true, 65), "html", null, true);
            yield ">";
            // line 66
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
            // line 67
            if ((($tmp = ($context["required"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 68
                yield "<span class=\"required-mark\"></span>";
            }
            // line 70
            yield "</summary>";
        }
        // line 72
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [($context["content_wrapper_classes"] ?? null)], "method", false, false, true, 72), "html", null, true);
        yield ">
    ";
        // line 73
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 74
            yield "    <div";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ($context["inner_wrapper_classes"] ?? null)]), "html", null, true);
            yield ">
    ";
        }
        // line 76
        yield "
      ";
        // line 77
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 78
            yield "        <div class=\"form-item form-item--error-message\">
          ";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
        </div>
      ";
        }
        // line 82
        if ((($tmp = ($context["description"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "<div class=\"bootstrap-details__description";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($tmp = ($context["disabled"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-disabled") : ("")));
            yield "\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["description"] ?? null), "html", null, true);
            yield "</div>";
        }
        // line 85
        if ((($tmp = ($context["children"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        }
        // line 88
        if ((($tmp = ($context["value"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["value"] ?? null), "html", null, true);
        }
        // line 92
        if ((($context["accordion"] ?? null) || ($context["accordion_item"] ?? null))) {
            // line 93
            yield "    </div>
    ";
        }
        // line 95
        yield "  </div>
</details>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["accordion", "accordion_item", "element", "attributes", "title", "required", "summary_attributes", "content_attributes", "errors", "description", "disabled", "children", "value"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap5_admin/templates/misc/details.html.twig";
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
        return array (  138 => 95,  134 => 93,  132 => 92,  129 => 89,  127 => 88,  124 => 86,  122 => 85,  115 => 83,  113 => 82,  107 => 79,  104 => 78,  102 => 77,  99 => 76,  93 => 74,  91 => 73,  86 => 72,  83 => 70,  80 => 68,  78 => 67,  76 => 66,  72 => 65,  70 => 61,  69 => 60,  68 => 59,  67 => 58,  66 => 57,  65 => 55,  63 => 53,  59 => 52,  57 => 49,  56 => 48,  55 => 47,  54 => 45,  52 => 41,  51 => 40,  50 => 39,  49 => 36,  47 => 32,  46 => 31,  45 => 30,  44 => 28,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap5_admin/templates/misc/details.html.twig", "D:\\wamp64\\www\\campus-project\\web\\themes\\contrib\\bootstrap5_admin\\templates\\misc\\details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 28, "if" => 53];
        static $filters = ["escape" => 52];
        static $functions = ["create_attribute" => 74];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['escape'],
                ['create_attribute'],
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
