<script>
    document.getElementById("checkPermissionAll").addEventListener("click", function() {
        const checkboxes = document.querySelectorAll('input[type="checkbox"]');
        checkboxes.forEach(function(checkbox) {
            checkbox.checked = this.checked;
        }, this);
        implementAllChecked();
    });

    function checkPermissionByGroup(className, checkThis) {
        const groupIdName = document.getElementById(checkThis.id);
        const classCheckBoxes = document.querySelectorAll('.' + className + ' input[type="checkbox"]');
        classCheckBoxes.forEach(function(checkbox) {
            checkbox.checked = groupIdName.checked;
        });
        implementAllChecked();
    }

    function checkSinglePermission(groupClassName, groupID, countTotalPermission) {
        const classCheckboxes = document.querySelectorAll('.' + groupClassName + ' input[type="checkbox"]');
        const groupIDCheckBox = document.getElementById(groupID);
        const checkedCount = document.querySelectorAll('.' + groupClassName + ' input[type="checkbox"]:checked').length;

        groupIDCheckBox.checked = checkedCount === countTotalPermission;
        implementAllChecked();
    }

    function implementAllChecked() {
        const allPermissionsCount = parseInt("{{ count($all_permissions) }}");
        const permissionGroupsCount = parseInt("{{ count($permission_groups) }}");

        const checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        const checkedCount = checkboxes.length;

        const checkPermissionAll = document.getElementById("checkPermissionAll");
        checkPermissionAll.checked = checkedCount >= (allPermissionsCount + permissionGroupsCount);
    }

    function implementAllCheckedBySingleInput() {
        implementAllChecked();
    }
</script>
