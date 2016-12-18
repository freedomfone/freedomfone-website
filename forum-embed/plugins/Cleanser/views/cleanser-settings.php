<?php if (!defined('APPLICATION')) exit();
if (!Gdn::Session()->CheckPermission('Garden.Users.Edit'))   exit();
?>

<h1><?php echo T('Cleanser - The Perfect Adminstration helper | by: Peregrine'); ?></h1>

<?php
echo $this->Form->Open();
echo $this->Form->Errors();
?>

 <table class="AltRows">
  <thead>
        <tr>
            <th><?php echo T('Item'); ?></th>
            <th class="Alt"><?php echo T('Value'); ?></th>
        </tr>
    </thead>
    <tbody>
   <tr>
    <td class="Alt">
<?php echo T('Enter Number of Records to Search (suggested: 500 or less)'); ?>
    </td>

    <td>
        <?php
        echo $this->Form->TextBox('Plugins.Cleanser.MaxRecords');
        ?>
    </td>

</tr>   

<tr>
    <td class="Alt">
<?php echo T('Offset: (skip N records)'); ?>
    </td>

    <td>
        <?php
        echo $this->Form->TextBox('Plugins.Cleanser.Offset');
        ?>
    </td>

</tr>    

<tr>

    <td class="Alt">
<?php echo T('Select Role (RoleID):'); ?>
    </td>

    <td>

        <?php
        $Fields = array('TextField' => 'Code', 'ValueField' => 'Code');
        $Options = ($this->RoleData);
        echo $this->Form->DropDown('Plugins.Cleanser.RoleSet', $Options, $Fields);
        ?>
    </td>
</tr>    

<tr>
    <td class="Alt">
<?php echo T('Enter Exact IP address if you are selecting on a specific IP Address:'); ?>
    </td>


    <td>
        <?php
        echo $this->Form->TextBox('Plugins.Cleanser.IPAddress');
        ?>
    </td>

</tr>         

<tr>

<tr>
    <td class="Alt">
<?php echo T('Discovery Text Pattern to Match (Reason for Joining)  - be very specific - so you do not get False Matches:'); ?>
    </td>


    <td>
        <?php
        echo $this->Form->TextBox('Plugins.Cleanser.PatternMatch', array('class' => 'Patterninput', 'size' => "80"));
        ?>
    </td>

</tr>         


<tr>
    <td class="Alt">
        <?php echo T('Action to be taken:'); ?>
    </td> 
    <td>
        <?php
        $Options = array('create' => 'create cleanser list', 'delete' => 'purge users');
        $Fields = array('TextField' => 'Code', 'ValueField' => 'Code');
        echo $this->Form->DropDown('Plugins.Cleanser.Action', $Options, $Fields);
        ?>
    </td>
</tr> 
</tbody>
</table>
<h3><b>Important: Please Back up your database before purging.</b> <p><b>  Each time you change role or ipaddress you must create a new list.  See the readme.txt for additional caveats. </b></p> </h3>             
<h3> 1) Select "role", enter ip address (optional), select "create cleanser list" then click submit</h3>
<h3> 2) View the cleanser list created from option in the moderation panel on left or <a href=index.php?p=/plugin/cleanser>View List Here</a></h3>
<h3> 3) if desired, edit cleanser list to manually delete line entries (via Cpanel or file transfer). If desired, Select action "purge users" from dropdown box to remove users from database after you have followed the above steps</h3>
<br />

<?php echo $this->Form->Close('Submit');






