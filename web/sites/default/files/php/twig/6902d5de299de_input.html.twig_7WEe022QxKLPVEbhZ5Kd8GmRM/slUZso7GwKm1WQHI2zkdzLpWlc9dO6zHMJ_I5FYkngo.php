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

/* themes/contrib/bootstrap5_admin/templates/form/input.html.twig */
class __TwigTemplate_baefc7812eb7b52a6b24339528f2db8d extends Template
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
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["button"], "method", false, false, true, 13) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["btn"], "method", false, false, true, 13))) {
            // line 14
            yield "  ";
            // line 15
            $context["classes"] = ["btn", (((($tmp =             // line 17
($context["icon"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("icon-link icon-link-hover") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 18
($context["attributes"] ?? null), "hasClass", ["button--danger"], "method", false, false, true, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-danger") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 19
($context["attributes"] ?? null), "hasClass", ["button--primary"], "method", false, false, true, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("btn-primary") : ("")), (((( !CoreExtension::getAttribute($this->env, $this->source,             // line 20
($context["attributes"] ?? null), "hasClass", ["media-library-item__remove"], "method", false, false, true, 20) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["button--danger"], "method", false, false, true, 20)) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["button--primary"], "method", false, false, true, 20))) ? ("btn-secondary") : (""))];
            // line 23
            yield "  ";
            if ((((($_v0 = ($context["attributes"] ?? null)) && is_array($_v0) || $_v0 instanceof ArrayAccess && in_array($_v0::class, CoreExtension::ARRAY_LIKE_CLASSES, true) ? ($_v0["type"] ?? null) : CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "type", [], "array", false, false, true, 23)) == "submit") &&  !Twig\Extension\CoreExtension::testEmpty(($context["icon"] ?? null)))) {
                // line 24
                yield "    <button";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 24), "html", null, true);
                yield ">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["icon"] ?? null), "html", null, true);
                yield " ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "value", [], "any", false, false, true, 24), "html", null, true);
                yield "</button>
  ";
            } else {
                // line 26
                yield "    <input";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 26), "html", null, true);
                yield " />
  ";
            }
            // line 28
            yield "  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasAttribute", ["list"], "method", false, false, true, 28) && CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["form-range"], "method", false, false, true, 28))) {
            // line 29
            yield "    <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", ["form-range"], "method", false, false, true, 29), "html", null, true);
            yield " oninput=\"this.nextElementSibling.value = this.value\"/><output>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "value", [], "any", false, false, true, 29), "html", null, true);
            yield "</output>
  ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["attributes"] ?? null), "hasClass", ["form-datetime-local"], "method", false, false, true, 30)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "    <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["form-control w-auto"], "method", false, false, true, 31), "html", null, true);
            yield " />
  ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
($context["attributes"] ?? null), "hasClass", ["form-date"], "method", false, false, true, 32) || CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "hasClass", ["form-time"], "method", false, false, true, 32))) {
            // line 33
            yield "    <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["w-auto"], "method", false, false, true, 33), "html", null, true);
            yield " />
  ";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 34
($context["attributes"] ?? null), "hasClass", ["form-file"], "method", false, false, true, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["form-control"], "method", false, false, true, 35), "html", null, true);
            yield " />
  ";
        } else {
            // line 37
            yield "    <input";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true);
            yield " />
  ";
        }
        // line 39
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "icon", "children"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap5_admin/templates/form/input.html.twig";
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
        return array (  111 => 39,  105 => 37,  99 => 35,  97 => 34,  92 => 33,  90 => 32,  85 => 31,  83 => 30,  76 => 29,  73 => 28,  67 => 26,  57 => 24,  54 => 23,  52 => 20,  51 => 19,  50 => 18,  49 => 17,  48 => 15,  46 => 14,  44 => 13,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap5_admin/templates/form/input.html.twig", "D:\\wamp64\\www\\campus-project\\web\\themes\\contrib\\bootstrap5_admin\\templates\\form\\input.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 13, "set" => 15];
        static $filters = ["escape" => 24];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
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
