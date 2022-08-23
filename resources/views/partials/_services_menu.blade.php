<!-- MENU WIDGET -->
<div class="widget menu-widget">
    <ul>
        
        <li>
            <a href="{!! route('services.index') !!}" class="{{ (request()->segment(2) == 'index') ? 'active' : '' }}">
                All services
            </a>
        </li>
        <li>
            <a href="{!! route('services.accounting') !!}" class="{{ (request()->segment(2) == 'accounting') ? 'active' : '' }}">
                Accounting
            </a>
        </li>
        <li>
            <a href="{!! route('services.payrollbureau') !!}" class="{{ (request()->segment(2) == 'payroll-bureau') ? 'active' : '' }}">
                Payroll Bureau
            </a>
        </li>
        <li>
            <a href="{!! route('services.forensicinvestigation') !!}" class="{{ (request()->segment(2) == 'forensic-investigation') ? 'active' : '' }}">
                Forensic Investigation
            </a>
        </li>
        <li>
            <a href="{!! route('services.tax') !!}" class="{{ (request()->segment(2) == 'tax') ? 'active' : '' }}">
                Tax
            </a>
        </li>
        <li>
            <a href="{!! route('services.businessadvisory') !!}" class="{{ (request()->segment(2) == 'business-advisory') ? 'active' : '' }}">
                Business Advisory
            </a>
        </li>
        <li>
            <a href="{!! route('services.auditassurance') !!}" class="{{ (request()->segment(2) == 'audit-assurance') ? 'active' : '' }}">
                Audit and Assurance
            </a>
        </li>
    </ul>
</div>
<!-- /. MENU WIDGET -->