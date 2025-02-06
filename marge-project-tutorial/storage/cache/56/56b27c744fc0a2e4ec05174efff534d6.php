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

/* invoices/index.twig */
class __TwigTemplate_21677b868251d56e6ecbc681a8fca064 extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }

    table tr th,
    table tr td {
        border: 1px solid #eee;
        padding: 5px;
    }

    .color-green {
        color: green;
    }

    .color-red {
        color: red;
    }

    .color-gray {
        color: gray;
    }

    .color-orange {
        color: orange;
    }
</style>

<table>
    <thead>
        <tr>
            <th>Invoice</th>
            <th>Amount</th>
            <th>Status</th>
            <th>Due Date</th>
        </tr>
    </thead>

    <tbody>
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["invoices"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["invoice"]) {
            // line 43
            yield "            <tr>
                <td>";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "invoiceNumber", [], "any", false, false, false, 44), "html", null, true);
            yield "</td>
                <td>";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extra\Intl\IntlExtension']->formatCurrency(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "amount", [], "any", false, false, false, 45), "USD"), "html", null, true);
            yield "</td>
                <td>1</td>
                <td>";
            // line 47
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "dueDate", [], "any", false, false, false, 47), ($context["empty"] ?? null))) ? ("N/A") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["invoice"], "dueDate", [], "any", false, false, false, 47), "m/d/Y"), "html", null, true)));
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        // line 51
        if (!$context['_iterated']) {
            // line 50
            yield "            <tr><td colspan=\"4\">No Invoices Found</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['invoice'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    </tbody>
</table>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "invoices/index.twig";
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
        return array (  118 => 52,  111 => 50,  109 => 51,  102 => 47,  97 => 45,  93 => 44,  90 => 43,  85 => 42,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "invoices/index.twig", "/var/www/views/invoices/index.twig");
    }
}
