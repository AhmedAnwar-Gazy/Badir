<!-- قائمة المشرف للتحكم بي الموقع -->
<?php if ($_SESSION['user'] ?? false) : ?>
    <?php if ($_SESSION['user']['type'] == "admin" || $_SESSION['user']['type'] == "manager") : ?>
        <nav class="bar_admin">
            <ul>
                <li>
                    <form action="/islamic_endowments_manage" method="get"><input type="hidden" name="" value=""><button type="submit">الاوقاف</button></form>
                </li>
                <li>
                    <form action="/charity_projects_manage" method="get"><input type="hidden" name="" value=""><button type="submit">المشاريع</button></form>
                </li>
                <li>
                    <form action="/charity_campaigns_manage" method="get"><input type="hidden" name="" value=""><button type="submit">حملات خيرية</button></form>
                </li>
                <li>
                    <form action="/notifications_manage" method="get"><input type="hidden" name="" value=""><button type="submit">الاشعارات</button></form>
                </li>
                <li>
                    <form action="/users_manage" method="get"><input type="hidden" name="" value=""><button type="submit">المستخدمين</button></form>
                </li>
                <li>
                    <form action="/executive_partners_manage" method="get"><input type="hidden" name="" value=""><button type="submit">الشركاء التنفيذيين</button></form>
                </li>
                <li>
                    <form action="/islamic_payments_manage" method="get"><input type="hidden" name="" value=""><button type="submit"> المصارف الاسلاميه</button></form>
                </li>

            </ul>
        </nav>
    <?php endif; ?>
<?php endif; ?>