



<li class="{{ Request::is('admin/table/tables*') ? 'active' : '' }}">
    <a href="{!! route('admin.table.tables.index') !!}">
    <i class="livicon" data-c="#EF6F6C" data-hc="#EF6F6C" data-name="paper-plane" data-size="18"
               data-loop="true"></i>
               Tables
    </a>
</li>

<li class="{{ Request::is('admin/client/clients*') ? 'active' : '' }}">
    <a href="{!! route('admin.client.clients.index') !!}">
    <i class="livicon" data-c="#6CC66C" data-hc="#6CC66C" data-name="user" data-size="18"
               data-loop="true"></i>
               Clients
    </a>
</li>

<li class="{{ Request::is('admin/menu/menus*') ? 'active' : '' }}">
    <a href="{!! route('admin.menu.menus.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="list" data-size="18"
               data-loop="true"></i>
               Menus
    </a>
</li>







<li class="{{ Request::is('admin/produit/produits*') ? 'active' : '' }}">
    <a href="{!! route('admin.produit.produits.index') !!}">
    <i class="livicon" data-c="#418BCA" data-hc="#418BCA" data-name="thumbnails-big" data-size="18"
               data-loop="true"></i>
               Produits
    </a>
</li>

<li class="{{ Request::is('admin/table/tables*') ? 'active' : '' }}">
    <a href="{!! route('admin.table.tables.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="globe" data-size="18"
               data-loop="true"></i>
               Tables
    </a>
</li>

<li class="{{ Request::is('admin/reservation/reservations*') ? 'active' : '' }}">
    <a href="{!! route('admin.reservation.reservations.index') !!}">
    <i class="livicon" data-c="#F89A14" data-hc="#F89A14" data-name="users" data-size="18"
               data-loop="true"></i>
               Reservations
    </a>
</li>

<li class="{{ Request::is('admin/commande/commandes*') ? 'active' : '' }}">
    <a href="{!! route('admin.commande.commandes.index') !!}">
    <i class="livicon" data-c="#31B0D5" data-hc="#31B0D5" data-name="wrench" data-size="18"
               data-loop="true"></i>
               Commandes
    </a>
</li>

