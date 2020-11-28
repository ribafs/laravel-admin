<div class="col-md-2">
    <div class="card">
        <div class="card-header bg-success">
            Menu
        </div>

        <div class="card-body bg-dark text-white">
      @role ('super')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/users') }}">
                        - Users
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/roles') }}">
                        - Roles
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/permissions') }}">
                        - Permissions
                    </a>
                </li>
            </ul>
            <hr>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/clients') }}">
                        - Clients
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/products') }}">
                        - Products
                    </a>
                </li>
            </ul>
            <hr>
      @endrole
      @role('admin')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/users') }}">
                        - Users
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/roles') }}">
                        - Roles
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/permissions') }}">
                        - Permissions
                    </a>
                </li>
            </ul>
      @endrole
      @role('manager')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/clients') }}">
                        - Clients
                    </a>
                </li>
            </ul>
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/products') }}">
                        - Products
                    </a>
                </li>
            </ul>
      @endrole
      @role('user')
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a class="text-white" href="{{ url('/admin/clients') }}">
                        - Clients
                    </a>
                </li>
            </ul>
      @endrole
        </div>
    </div>
</div>
