<ul class="employee-form-nav">
    <li class="{{ Request::is('employee/basic-information') ? 'active' : '' }}">
        <a href="{{ route('employee.basic') }}">Basic Information</a>
    </li>
    <li class="{{ Request::is('employee/official-information') ? 'active' : '' }}">
        <a href="{{ route('employee.office') }}">Official Information</a>
    </li>
    <li class="{{ Request::is('employee/shift-information') ? 'active' : '' }}">
        <a href="{{ route('employee.shift') }}">Shifts</a>
    </li>
    <li class="{{ Request::is('employee/salary-information') ? 'active' : '' }}">
        <a href="{{ route('employee.salary') }}">Salaries</a>
    </li>
</ul>