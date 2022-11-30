{** staff_members section **}

{capture name="mainbox"}
    {capture name="staff_members_table"}
    <form >
        <div class="" id="63876dfc014e2" data-ca-longtap="">
            <div class="table-responsive-wrapper longtap-selection">
            {capture name="adv_buttons"}
            <div class="nav__actions-adv-buttons adv-buttons" style="width: 100%;display: flex;justify-content: end;margin-top: 10px;"">
                <div class="btn-group ">
                    <a class="btn cm-tooltip" href="#">
                        <span class="cs-icon icon-plus"></span>                  
                    </a>
                </div>
            </div>
                <table class="table table-middle table--relative table-responsive">
                    <thead data-ca-bulkedit-default-object="true" data-ca-bulkedit-component="defaultObject">
                        <tr>
                            <th>ID</th>
                            <th>First name</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                    {foreach from=$staff_members item=staff}
                        <tr>
                            <td>{$staff.id}</td>
                            <td>{$staff.first_name}</td>
                            <td>{$staff.last_name}</td>
                            <td>{$staff.email}</td>
                            <td>{$staff.status}</td>
                            <td>{$staff.description}</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
        
    </form>
{** ad section **}
