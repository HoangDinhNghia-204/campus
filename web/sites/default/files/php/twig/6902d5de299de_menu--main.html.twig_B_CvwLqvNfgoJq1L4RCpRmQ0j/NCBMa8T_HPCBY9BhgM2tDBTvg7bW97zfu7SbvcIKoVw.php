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

/* themes/contrib/bootstrap5_admin/templates/navigation/menu--main.html.twig */
class __TwigTemplate_0fe3c8be10d86b0990c22f891b720516 extends Template
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
        // line 22
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 23
        yield "
";
        // line 28
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_build_menu", $context, 28, $this->getSourceContext())->macro_build_menu(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        // line 44
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 30
    public function macro_build_menu($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 31
            yield "  ";
            $macros["menus"] = $this;
            // line 32
            yield "  ";
            if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "  ";
                if ((($context["menu_level"] ?? null) == 0)) {
                    // line 34
                    yield "<ul";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["navbar-nav me-auto"], "method", false, false, true, 34), "html", null, true);
                    yield ">
";
                } else {
                    // line 36
                    yield "<ul class=\"dropdown-menu\">
  ";
                }
                // line 38
                yield "  ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    yield "    ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_add_link", $context, 39, $this->getSourceContext())->macro_add_link(...[$context["item"], ($context["attributes"] ?? null), ($context["menu_level"] ?? null)]));
                    yield "
  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                yield "</ul>
";
            }
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 45
    public function macro_add_link($item = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "item" => $item,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 46
            yield "  ";
            $macros["menus"] = $this;
            // line 47
            yield "  ";
            $context["list_item_classes"] = ["nav-item", (((CoreExtension::getAttribute($this->env, $this->source,             // line 49
($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 49) && (($context["menu_level"] ?? null) != 1))) ? ("dropdown") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,             // line 50
($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 50) && CoreExtension::inFilter(($context["menu_level"] ?? null), [1, 2]))) ? ("dropend") : (""))];
            // line 52
            yield "  ";
            $context["link_class"] = [(((            // line 53
($context["menu_level"] ?? null) == 0)) ? ("nav-item") : ("")), (((            // line 54
($context["menu_level"] ?? null) == 0)) ? ("nav-link") : ("")), (((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 55
($context["item"] ?? null), "in_active_trail", [], "any", false, false, true, 55)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("active") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,             // line 56
($context["item"] ?? null), "is_expanded", [], "any", false, false, true, 56) || CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "is_collapsed", [], "any", false, false, true, 56))) ? ("dropdown-toggle") : ("")), (((            // line 57
($context["menu_level"] ?? null) > 0)) ? ("dropdown-item") : (""))];
            // line 59
            yield "  ";
            $context["toggle_class"] = [];
            // line 60
            yield "  <li";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "attributes", [], "any", false, false, true, 60), "addClass", [($context["list_item_classes"] ?? null)], "method", false, false, true, 60), "html", null, true);
            yield ">
    ";
            // line 61
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 61)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 62), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 62), ["class" => ($context["link_class"] ?? null), "role" => "button", "data-bs-toggle" => "dropdown", "data-bs-auto-close" => "outside", "aria-expanded" => "false", "title" => ((t("Expand menu") . " ") . CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 62))]), "html", null, true);
                yield "
      ";
                // line 63
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_build_menu", $context, 63, $this->getSourceContext())->macro_build_menu(...[CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "below", [], "any", false, false, true, 63), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                yield "
    ";
            } else {
                // line 65
                yield "      ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, true, 65), CoreExtension::getAttribute($this->env, $this->source, ($context["item"] ?? null), "url", [], "any", false, false, true, 65), ["class" => ($context["link_class"] ?? null)]), "html", null, true);
                yield "
    ";
            }
            // line 67
            yield "  </li>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/contrib/bootstrap5_admin/templates/navigation/menu--main.html.twig";
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
        return array (  172 => 67,  166 => 65,  161 => 63,  156 => 62,  154 => 61,  149 => 60,  146 => 59,  144 => 57,  143 => 56,  142 => 55,  141 => 54,  140 => 53,  138 => 52,  136 => 50,  135 => 49,  133 => 47,  130 => 46,  116 => 45,  108 => 41,  99 => 39,  94 => 38,  90 => 36,  84 => 34,  81 => 33,  78 => 32,  75 => 31,  61 => 30,  54 => 44,  49 => 28,  46 => 23,  44 => 22,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/contrib/bootstrap5_admin/templates/navigation/menu--main.html.twig", "D:\\wamp64\\www\\campus-project\\web\\themes\\contrib\\bootstrap5_admin\\templates\\navigation\\menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 22, "macro" => 30, "if" => 32, "for" => 38, "set" => 47];
        static $filters = ["escape" => 34, "t" => 62];
        static $functions = ["link" => 62];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'for', 'set'],
                ['escape', 't'],
                ['link'],
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
