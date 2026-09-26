<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Εξαρτήματα';
$lang['admin_content'] = 'Περιεχόμενα';
$lang['admin_database_backup'] = 'Αντίγραφα Ασφαλείας Βάσης Δεδομένων';
$lang['admin_extensions'] = 'Επεκτάσεις';
$lang['admin_firewall'] = 'Τείχος προστασίας';
$lang['admin_help'] = 'Βοήθεια';
$lang['admin_languages'] = 'Γλώσσες';
$lang['admin_logs'] = 'Αρχεία Καταγραφής Συστήματος';
$lang['admin_media'] = 'Βιβλιοθήκη Πολυμέσων';
$lang['admin_modules'] = 'Ενότητες';
$lang['admin_plugins'] = 'Πρόσθετα';
$lang['admin_reports'] = 'Καταγραφή Δραστηριότητας';
$lang['admin_settings'] = 'Ρυθμίσεις Συστήματος';
$lang['admin_sysinfo'] = 'Πληροφορίες Συστήματος';
$lang['admin_system'] = 'Σύστημα';
$lang['admin_system_firewall'] = 'Τείχος προστασίας συστήματος';
$lang['admin_themes'] = 'Θέματα';
$lang['admin_updates'] = 'Ενημερώσεις Συστήματος';
$lang['admin_users'] = 'Χρήστες';
$lang['admin_view_site'] = 'Προβολή Ιστότοπου';
$lang['per_page'] = 'Ανά Σελίδα';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Σας ευχαριστούμε που δημιουργήσατε με <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Δεν υπάρχουν ενεργά στοιχεία.} other{<b>#</b> από <b>%s</b> στοιχεία είναι ενεργά.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'Η εγκατάσταση απέτυχε: %s';
$lang['admin_install_location_app'] = 'Μόνο αυτή η εφαρμογή';
$lang['admin_install_location_core'] = 'Όλες οι εφαρμογές';
$lang['admin_install_location_select'] = '&#151; Επιλέξτε τοποθεσία &#151;';
$lang['admin_install_update_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε αυτό το πακέτο;';
$lang['admin_install_update_error'] = 'Η ενημέρωση του πακέτου απέτυχε.';
$lang['admin_install_update_skip_confirm'] = 'Είστε βέβαιοι ότι θέλετε να παραλείψετε αυτήν την ενημέρωση;';
$lang['admin_install_update_skip_error'] = 'Η παράλειψη αυτής της ενημέρωσης απέτυχε.';
$lang['admin_install_update_skip_success'] = 'Η ενημέρωση παραλείφθηκε με επιτυχία.';
$lang['admin_install_update_success'] = 'Το πακέτο ενημερώθηκε με επιτυχία.';
$lang['admin_install_upload_tip'] = 'Εγκαταστήστε ένα πακέτο μεταφορτώνοντας εδώ το αρχείο <b>.zip</b> του.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Αδυναμία καθαρισμού παλαιών αρχείων αντιγράφων ασφαλείας.';
$lang['admin_database_backup_clean_success'] = '%d αρχεία αντιγράφων ασφαλείας διαγράφηκαν. %d χώρος δίσκου απελευθερώθηκε.';
$lang['admin_database_backup_create'] = 'Δημιουργία Αντιγράφου Ασφαλείας';
$lang['admin_database_backup_create_confirm'] = 'Είστε σίγουροι ότι θέλετε να δημιουργήσετε αντίγραφο ασφαλείας τώρα;';
$lang['admin_database_backup_create_error'] = 'Αδυναμία δημιουργίας αρχείου αντιγράφου ασφαλείας. Βεβαιωθείτε ότι ο φάκελος <b>%s</b> είναι εγγράψιμος.';
$lang['admin_database_backup_create_success'] = 'Το αρχείο αντιγράφου ασφαλείας βάσης δεδομένων <b>%s</b> δημιουργήθηκε με επιτυχία.';
$lang['admin_database_backup_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτά τα αρχεία αντιγράφων ασφαλείας;';
$lang['admin_database_backup_delete_error'] = 'Αδυναμία διαγραφής επιλεγμένων αρχείων αντιγράφων ασφαλείας.';
$lang['admin_database_backup_delete_success'] = 'Τα αρχεία αντιγράφων ασφαλείας διαγράφηκαν με επιτυχία.';
$lang['admin_database_backup_download_error'] = 'Αδυναμία λήψης του επιλεγμένου αρχείου αντιγράφου ασφαλείας.';
$lang['admin_database_backup_download_success'] = 'Το αρχείο αντιγράφου ασφαλείας λήφθηκε με επιτυχία.';
$lang['admin_database_backup_lock_confirm'] = 'Είστε σίγουροι ότι θέλετε να κλειδώσετε αυτά τα αρχεία αντιγράφων ασφαλείας;';
$lang['admin_database_backup_lock_error'] = 'Αδυναμία κλειδώματος επιλεγμένων αρχείων αντιγράφων ασφαλείας.';
$lang['admin_database_backup_lock_success'] = 'Τα αρχεία αντιγράφων ασφαλείας κλειδώθηκαν με επιτυχία.';
$lang['admin_database_backup_locked_error'] = 'Αδυναμία διαγραφής κλειδωμένων αρχείων αντιγράφων ασφαλείας.';
$lang['admin_database_backup_missing_error'] = 'Το αρχείο αντιγράφου ασφαλείας δεν βρέθηκε.';
$lang['admin_database_backup_unlock_confirm'] = 'Είστε σίγουροι ότι θέλετε να ξεκλειδώσετε αυτά τα αρχεία αντιγράφων ασφαλείας;';
$lang['admin_database_backup_unlock_error'] = 'Αδυναμία ξεκλειδώματος επιλεγμένων αρχείων αντιγράφων ασφαλείας.';
$lang['admin_database_backup_unlock_success'] = 'Τα αρχεία αντιγράφων ασφαλείας ξεκλειδώθηκαν με επιτυχία.';
$lang['admin_database_prune'] = 'Καθαρισμός';
$lang['admin_database_prune_confirm'] = 'Είστε σίγουροι ότι θέλετε να καθαρίσετε τη βάση δεδομένων; Θα δημιουργηθεί αντίγραφο ασφαλείας κατά την εκτέλεση.';
$lang['admin_database_prune_error'] = 'Αδυναμία καθαρισμού της βάσης δεδομένων.';
$lang['admin_database_prune_next'] = 'Επόμενο καθαρισμός: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Η βάση δεδομένων καθαρίστηκε με επιτυχία.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'Διαγραφή Αρχείων Καταγραφής';
$lang['admin_logs_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε τα επιλεγμένα αρχεία καταγραφής;';
$lang['admin_logs_delete_error'] = 'Αδυναμία διαγραφής αρχείων καταγραφής.';
$lang['admin_logs_delete_success'] = 'Τα αρχεία καταγραφής διαγράφηκαν με επιτυχία.';
$lang['admin_logs_error_disabled'] = 'Η καταγραφή δεν είναι ενεργοποιημένη αυτή τη στιγμή.';
$lang['admin_logs_error_empty'] = 'Δεν βρέθηκαν αρχεία καταγραφής.';
$lang['admin_logs_error_missing'] = 'Είτε το αρχείο καταγραφής δεν βρέθηκε, ή ήταν κενό.';
$lang['admin_logs_tip'] = 'Η καταγραφή μπορεί γρήγορα να δημιουργήσει πολύ μεγάλα αρχεία. Για ενεργούς ιστοτόπους, σκεφτείτε να διαγράφετε τα παλιά.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε τα επιλεγμένα email;';
$lang['admin_emails_delete_error'] = 'Αδυναμία διαγραφής επιλεγμένων email.';
$lang['admin_emails_delete_success'] = 'Τα επιλεγμένα email διαγράφηκαν με επιτυχία.';
$lang['admin_emails_email_from'] = 'Αποστολέας';
$lang['admin_emails_mail_queue'] = 'Ουρά Αλληλογραφίας';
$lang['admin_emails_mailer'] = 'Μαζική Αλληλογραφία';
$lang['admin_emails_search'] = 'Αναζήτηση email ανά θέμα ή περιεχόμενο...';
$lang['admin_emails_send_error'] = 'Αποτυχία προσθήκης του email στην ουρά. Παρακαλώ δοκιμάστε ξανά.';
$lang['admin_emails_send_none'] = 'Δεν υπάρχουν χρήστες που αντιστοιχούν στα κριτήριά σας.';
$lang['admin_emails_send_success'] = 'Το email προστέθηκε στην ουρά και θα σταλεί σύντομα.';
$lang['admin_emails_send_to_banned'] = 'Αποστολή σε αποκλεισμένους χρήστες.';
$lang['admin_emails_send_to_deleted'] = 'Αποστολή σε διαγραμμένους χρήστες.';
$lang['admin_emails_send_to_disabled'] = 'Αποστολή σε ανενεργούς χρήστες.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'Προσθήκη Χρήστη';
$lang['admin_users_all_users'] = 'Όλοι οι Χρήστες';
$lang['admin_users_ban_confirm'] = 'Είστε βέβαιοι ότι θέλετε να αποκλείσετε τους επιλεγμένους χρήστες;';
$lang['admin_users_ban_error'] = 'Δεν είναι δυνατός ο αποκλεισμός των επιλεγμένων χρηστών.';
$lang['admin_users_ban_success'] = 'Οι επιλεγμένοι χρήστες αποκλείστηκαν με επιτυχία.';
$lang['admin_users_delete_confirm'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τους επιλεγμένους χρήστες;';
$lang['admin_users_delete_error'] = 'Δεν είναι δυνατή η διαγραφή των επιλεγμένων χρηστών.';
$lang['admin_users_delete_success'] = 'Οι επιλεγμένοι χρήστες διαγράφηκαν με επιτυχία.';
$lang['admin_users_disable_confirm'] = 'Είστε βέβαιοι ότι θέλετε να απενεργοποιήσετε τους επιλεγμένους χρήστες;';
$lang['admin_users_disable_error'] = 'Δεν είναι δυνατή η απενεργοποίηση των επιλεγμένων χρηστών.';
$lang['admin_users_disable_success'] = 'Οι επιλεγμένοι χρήστες απενεργοποιήθηκαν με επιτυχία.';
$lang['admin_users_edit'] = 'Επεξεργασία Χρήστη';
$lang['admin_users_edit_error'] = 'Αδυναμία ενημέρωσης χρήστη.';
$lang['admin_users_edit_success'] = 'Ο χρήστης ενημερώθηκε με επιτυχία.';
$lang['admin_users_enable_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ενεργοποιήσετε τους επιλεγμένους χρήστες;';
$lang['admin_users_enable_error'] = 'Δεν είναι δυνατή η ενεργοποίηση των επιλεγμένων χρηστών.';
$lang['admin_users_enable_success'] = 'Οι επιλεγμένοι χρήστες ενεργοποιήθηκαν με επιτυχία.';
$lang['admin_users_groups'] = 'Ομάδες';
$lang['admin_users_lock_confirm'] = 'Είστε σίγουροι ότι θέλετε να κλειδώσετε τους επιλεγμένους χρήστες;';
$lang['admin_users_lock_error'] = 'Αδυναμία κλειδώματος των επιλεγμένων χρηστών.';
$lang['admin_users_lock_success'] = 'Οι επιλεγμένοι χρήστες κλειδώθηκαν με επιτυχία.';
$lang['admin_users_logged'] = 'Συνδεδεμένοι Χρήστες';
$lang['admin_users_manage'] = 'Διαχείριση Χρηστών';
$lang['admin_users_remove_confirm'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε οριστικά τους επιλεγμένους χρήστες και όλα τα δεδομένα τους;';
$lang['admin_users_remove_error'] = 'Δεν είναι δυνατή η οριστική διαγραφή των επιλεγμένων χρηστών και όλων των δεδομένων τους.';
$lang['admin_users_remove_success'] = 'Οι επιλεγμένοι χρήστες και όλα τα δεδομένα τους διαγράφηκαν με επιτυχία.';
$lang['admin_users_restore_confirm'] = 'Είστε βέβαιοι ότι θέλετε να επαναφέρετε τους επιλεγμένους χρήστες;';
$lang['admin_users_restore_error'] = 'Δεν είναι δυνατή η επαναφορά των επιλεγμένων χρηστών.';
$lang['admin_users_restore_success'] = 'Οι επιλεγμένοι χρήστες επαναφέρθηκαν με επιτυχία.';
$lang['admin_users_search'] = 'Αναζήτηση κατά όνομα, όνομα χρήστη, ή email...';
$lang['admin_users_unban_confirm'] = 'Είστε βέβαιοι ότι θέλετε να άρετε τον αποκλεισμό των επιλεγμένων χρηστών;';
$lang['admin_users_unban_error'] = 'Δεν είναι δυνατή η άρση του αποκλεισμού των επιλεγμένων χρηστών.';
$lang['admin_users_unban_success'] = 'Ο αποκλεισμός των επιλεγμένων χρηστών άρθηκε με επιτυχία.';
$lang['admin_users_unlock_confirm'] = 'Είστε σίγουροι ότι θέλετε να ξεκλειδώσετε τους επιλεγμένους χρήστες;';
$lang['admin_users_unlock_error'] = 'Αδυναμία ξεκλειδώματος των επιλεγμένων χρηστών.';
$lang['admin_users_unlock_success'] = 'Οι επιλεγμένοι χρήστες ξεκλειδώθηκαν με επιτυχία.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'Καθαρισμός Αρχείων Καταγραφής';
$lang['admin_reports_clear_confirm'] = 'Είστε σίγουροι ότι θέλετε να καθαρίσετε το αρχείο καταγραφής ενεργειών;';
$lang['admin_reports_clear_error'] = 'Αδυναμία καθαρισμού του αρχείου καταγραφής ενεργειών.';
$lang['admin_reports_clear_success'] = 'Το αρχείο καταγραφής ενεργειών καθαρίστηκε με επιτυχία.';
$lang['admin_reports_latest_actions'] = 'Τελευταίες Ενέργειες';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε τα επιλεγμένα αρχεία;';
$lang['admin_media_delete_error'] = 'Αδυναμία διαγραφής αρχείων.';
$lang['admin_media_delete_success'] = 'Τα αρχεία διαγράφηκαν με επιτυχία.';
$lang['admin_media_file_delete_error'] = 'Αδυναμία διαγραφής αρχείου.';
$lang['admin_media_file_delete_success'] = 'Το αρχείο διαγράφηκε με επιτυχία.';
$lang['admin_media_file_update_error'] = 'Αδυναμία ενημέρωσης αρχείου.';
$lang['admin_media_file_update_success'] = 'Το αρχείο ενημερώθηκε με επιτυχία.';
$lang['admin_media_search'] = 'Αναζήτηση με βάση το όνομα, την περιγραφή ή το όνομα αρχείου...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Δεν υπάρχουν ενεργές μονάδες.} other{<b>#</b> από <b>%s</b> μονάδες είναι ενεργές.}';
$lang['admin_modules_add'] = 'Προσθήκη Ενότητας';
$lang['admin_modules_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε την ενότητα: <b>%s</b>;';
$lang['admin_modules_delete_error'] = 'Αδυναμία διαγραφής της ενότητας.';
$lang['admin_modules_delete_error_active'] = 'Οι ενεργές μονάδες δεν μπορούν να διαγραφούν.';
$lang['admin_modules_delete_success'] = 'Η ενότητα διαγράφηκε με επιτυχία.';
$lang['admin_modules_disable_all_confirm'] = 'Είστε σίγουροι ότι θέλετε να απενεργοποιήσετε όλες τις ενότητες;';
$lang['admin_modules_disable_all_error'] = 'Αδυναμία απενεργοποίησης όλων των ενοτήτων.';
$lang['admin_modules_disable_all_success'] = 'Όλες οι ενότητες απενεργοποιήθηκαν με επιτυχία.';
$lang['admin_modules_disable_confirm'] = 'Είστε σίγουροι ότι θέλετε να απενεργοποιήσετε την ενότητα: <b>%s</b>;';
$lang['admin_modules_disable_error'] = 'Αδυναμία απενεργοποίησης της ενότητας.';
$lang['admin_modules_disable_success'] = 'Η ενότητα απενεργοποιήθηκε με επιτυχία.';
$lang['admin_modules_enable_all_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε όλες τις ενότητες;';
$lang['admin_modules_enable_all_error'] = 'Αδυναμία ενεργοποίησης όλων των ενοτήτων.';
$lang['admin_modules_enable_all_success'] = 'Όλες οι ενότητες ενεργοποιήθηκαν με επιτυχία.';
$lang['admin_modules_enable_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε την ενότητα: <b>%s</b>;';
$lang['admin_modules_enable_error'] = 'Αδυναμία ενεργοποίησης της ενότητας.';
$lang['admin_modules_enable_success'] = 'Η ενότητα ενεργοποιήθηκε με επιτυχία.';
$lang['admin_modules_global'] = 'Καθολική μονάδα (κοινόχρηστη)';
$lang['admin_modules_install_confirm'] = 'Είστε βέβαιοι ότι θέλετε να εγκαταστήσετε τη μονάδα: <b>%s</b>;';
$lang['admin_modules_install_error'] = 'Η εγκατάσταση της μονάδας απέτυχε.';
$lang['admin_modules_install_success'] = 'Η μονάδα εγκαταστάθηκε με επιτυχία.';
$lang['admin_modules_install_tip'] = 'Οι ενότητες προσθέτουν νέα χαρακτηριστικά και λειτουργικότητα στον ιστότοπό σας. Περιηγηθείτε στις διαθέσιμες ενότητες στον <a href="%s" target="_blank" rel="noopener">κατάλογο ενοτήτων</a> ή ανεβάστετε μία ως πακέτο <b>.zip</b>.';
$lang['admin_modules_update_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε αυτή τη μονάδα;';
$lang['admin_modules_update_error'] = 'Η ενημέρωση της μονάδας απέτυχε.';
$lang['admin_modules_update_success'] = 'Η μονάδα ενημερώθηκε με επιτυχία.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Δεν υπάρχουν ενεργά πρόσθετα.} other{<b>#</b> από <b>%s</b> πρόσθετα είναι ενεργά.}';
$lang['admin_plugins_add'] = 'Προσθήκη Πρόσθετου';
$lang['admin_plugins_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε το πρόσθετο: <b>%s</b>;';
$lang['admin_plugins_delete_error'] = 'Αδυναμία διαγραφής του πρόσθετου.';
$lang['admin_plugins_delete_error_active'] = 'Τα ενεργά πρόσθετα δεν μπορούν να διαγραφούν.';
$lang['admin_plugins_delete_success'] = 'Το πρόσθετο διαγράφηκε με επιτυχία.';
$lang['admin_plugins_disable_all_confirm'] = 'Είστε σίγουροι ότι θέλετε να απενεργοποιήσετε όλα τα πρόσθετα;';
$lang['admin_plugins_disable_all_error'] = 'Αδυναμία απενεργοποίησης όλων των πρόσθετων.';
$lang['admin_plugins_disable_all_success'] = 'Όλα τα πρόσθετα απενεργοποιήθηκαν με επιτυχία.';
$lang['admin_plugins_disable_confirm'] = 'Είστε σίγουροι ότι θέλετε να απενεργοποιήσετε το πρόσθετο: <b>%s</b>;';
$lang['admin_plugins_disable_error'] = 'Αδυναμία απενεργοποίησης του πρόσθετου.';
$lang['admin_plugins_disable_success'] = 'Το πρόσθετο απενεργοποιήθηκε με επιτυχία.';
$lang['admin_plugins_enable_all_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε όλα τα πρόσθετα;';
$lang['admin_plugins_enable_all_error'] = 'Αδυναμία ενεργοποίησης όλων των πρόσθετων.';
$lang['admin_plugins_enable_all_success'] = 'Όλα τα πρόσθετα ενεργοποιήθηκαν με επιτυχία.';
$lang['admin_plugins_enable_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε το πρόσθετο: <b>%s</b>;';
$lang['admin_plugins_enable_error'] = 'Αδυναμία ενεργοποίησης του πρόσθετου.';
$lang['admin_plugins_enable_success'] = 'Το πρόσθετο ενεργοποιήθηκε με επιτυχία.';
$lang['admin_plugins_global'] = 'Καθολικό πρόσθετο (κοινόχρηστο)';
$lang['admin_plugins_install_confirm'] = 'Είστε βέβαιοι ότι θέλετε να εγκαταστήσετε το πρόσθετο: <b>%s</b>;';
$lang['admin_plugins_install_error'] = 'Η εγκατάσταση του πρόσθετου απέτυχε.';
$lang['admin_plugins_install_success'] = 'Το πρόσθετο εγκαταστάθηκε με επιτυχία.';
$lang['admin_plugins_install_tip'] = 'Τα πρόσθετα επεκτείνουν τα υπάρχοντα χαρακτηριστικά με επιπλέον επιλογές ή ενσωματώσεις. Εγκαταστήστε από τον <a href="%s" target="_blank" rel="noopener">κατάλογο πρόσθετων</a> ή ανεβάστετε ένα αρχείο <b>.zip</b>.';
$lang['admin_plugins_update_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε αυτό το πρόσθετο;';
$lang['admin_plugins_update_error'] = 'Η ενημέρωση του πρόσθετου απέτυχε.';
$lang['admin_plugins_update_success'] = 'Το πρόσθετο ενημερώθηκε με επιτυχία.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'Προσθήκη Θέματος';
$lang['admin_themes_delete_confirm'] = 'Είστε σίγουροι ότι θέλετε να διαγράψετε το θέμα: <b>%s</b>;';
$lang['admin_themes_delete_error'] = 'Αδυναμία διαγραφής του θέματος.';
$lang['admin_themes_delete_error_active'] = 'Δεν μπορείτε να διαγράψετε το ενεργό θέμα.';
$lang['admin_themes_delete_success'] = 'Το θέμα διαγράφηκε με επιτυχία.';
$lang['admin_themes_disable_confirm'] = 'Είστε βέβαιοι ότι θέλετε να απενεργοποιήσετε το θέμα: <b>%s</b>;';
$lang['admin_themes_disable_error'] = 'Δεν ήταν δυνατή η απενεργοποίηση του θέματος.';
$lang['admin_themes_disable_error_active'] = 'Το ενεργό θέμα δεν μπορεί να απενεργοποιηθεί.';
$lang['admin_themes_disable_success'] = 'Το θέμα απενεργοποιήθηκε με επιτυχία.';
$lang['admin_themes_enable_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε το θέμα: <b>%s</b>;';
$lang['admin_themes_enable_error'] = 'Αδυναμία ενεργοποίησης του θέματος.';
$lang['admin_themes_enable_success'] = 'Το θέμα ενεργοποιήθηκε με επιτυχία.';
$lang['admin_themes_install_confirm'] = 'Είστε βέβαιοι ότι θέλετε να εγκαταστήσετε το θέμα: <b>%s</b>;';
$lang['admin_themes_install_error'] = 'Η εγκατάσταση του θέματος απέτυχε.';
$lang['admin_themes_install_success'] = 'Το θέμα εγκαταστάθηκε με επιτυχία.';
$lang['admin_themes_install_tip'] = 'Τα θέματα αλλάζουν την εμφάνιση και τη διάταξη του ιστοτόπου σας. Επιλέξτε από την <a href="%s" target="_blank" rel="noopener">βιβλιοθήκη θεμάτων</a> ή ανεβάστετε ένα αρχείο <b>.zip</b> για να εγκαταστήσετε το δικό σας.';
$lang['admin_themes_none_tip'] = 'Αυτή η εφαρμογή εκτελείται χωρίς θέμα. Εγκαταστήστε ένα για να προσαρμόσετε τη δημόσια διεπαφή.';
$lang['admin_themes_update_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε αυτό το θέμα;';
$lang['admin_themes_update_error'] = 'Η ενημέρωση του θέματος απέτυχε.';
$lang['admin_themes_update_success'] = 'Το θέμα ενημερώθηκε με επιτυχία.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'Μενού';
$lang['admin_menus_assign_error'] = 'Αδυναμία ενημέρωσης των τοποθεσιών μενού.';
$lang['admin_menus_assign_success'] = 'Οι τοποθεσίες μενού ενημερώθηκαν με επιτυχία.';
$lang['admin_menus_header'] = 'Υπάρχουν <b>%s</b> διαθέσιμες θέσεις μενού.';
$lang['admin_menus_location'] = 'Τοποθεσία';
$lang['admin_menus_locations'] = 'Τοποθεσίες Μενού';
$lang['admin_menus_manage'] = 'Διαχείριση Μενού';
$lang['admin_menus_menu'] = 'Ανατεθειμένο Μενού';
$lang['admin_menus_none'] = '&#151; Κανένα &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'Προσθήκη γλώσσας';
$lang['admin_languages_default_confirm'] = 'Είστε σίγουροι ότι θέλετε να κάνετε αυτή τη γλώσσα την προεπιλεγμένη γλώσσα του ιστοτόπου;';
$lang['admin_languages_default_error'] = 'Αδυναμία αλλαγής της προεπιλεγμένης γλώσσας.';
$lang['admin_languages_default_error_nochange'] = 'Αυτή η γλώσσα είναι ήδη η προεπιλεγμένη.';
$lang['admin_languages_default_success'] = 'Η προεπιλεγμένη γλώσσα άλλαξε με επιτυχία.';
$lang['admin_languages_delete_confirm'] = 'Είστε βέβαιοι ότι θέλετε να διαγράψετε τη γλώσσα: <b>%s</b>;';
$lang['admin_languages_delete_error'] = 'Η διαγραφή της γλώσσας απέτυχε.';
$lang['admin_languages_delete_error_active'] = 'Οι ενεργές γλώσσες δεν μπορούν να διαγραφούν.';
$lang['admin_languages_delete_error_default'] = 'Η προεπιλεγμένη γλώσσα δεν μπορεί να διαγραφεί.';
$lang['admin_languages_delete_success'] = 'Η γλώσσα διαγράφηκε με επιτυχία.';
$lang['admin_languages_disable_all_confirm'] = 'Είστε σίγουροι ότι θέλετε να απενεργοποιήσετε όλες τις γλώσσες;';
$lang['admin_languages_disable_all_error'] = 'Αδυναμία απενεργοποίησης όλων των γλωσσών.';
$lang['admin_languages_disable_all_success'] = 'Όλες οι γλώσσες απενεργοποιήθηκαν με επιτυχία.';
$lang['admin_languages_disable_confirm'] = 'Είστε σίγουροι ότι θέλετε να απενεργοποιήσετε τη γλώσσα: <b>%s</b>;';
$lang['admin_languages_disable_error'] = 'Αδυναμία απενεργοποίησης της γλώσσας.';
$lang['admin_languages_disable_error_default'] = 'Η προεπιλεγμένη γλώσσα δεν μπορεί να απενεργοποιηθεί.';
$lang['admin_languages_disable_error_nochange'] = 'Αυτή η γλώσσα είναι ήδη απενεργοποιημένη.';
$lang['admin_languages_disable_success'] = 'Η γλώσσα απενεργοποιήθηκε με επιτυχία.';
$lang['admin_languages_enable_all_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε όλες τις γλώσσες;';
$lang['admin_languages_enable_all_error'] = 'Αδυναμία ενεργοποίησης όλων των γλωσσών.';
$lang['admin_languages_enable_all_success'] = 'Όλες οι γλώσσες ενεργοποιήθηκαν με επιτυχία.';
$lang['admin_languages_enable_confirm'] = 'Είστε σίγουροι ότι θέλετε να ενεργοποιήσετε τη γλώσσα: <b>%s</b>;';
$lang['admin_languages_enable_error'] = 'Αδυναμία ενεργοποίησης της γλώσσας.';
$lang['admin_languages_enable_error_nochange'] = 'Αυτή η γλώσσα είναι ήδη ενεργοποιημένη.';
$lang['admin_languages_enable_success'] = 'Η γλώσσα ενεργοποιήθηκε με επιτυχία.';
$lang['admin_languages_install_confirm'] = 'Είστε βέβαιοι ότι θέλετε να εγκαταστήσετε τη γλώσσα: <b>%s</b>;';
$lang['admin_languages_install_error'] = 'Η εγκατάσταση της γλώσσας απέτυχε.';
$lang['admin_languages_install_success'] = 'Η γλώσσα εγκαταστάθηκε με επιτυχία.';
$lang['admin_languages_install_tip'] = 'Οι γλώσσες προσθέτουν μεταφράσεις για τη διεπαφή και το περιεχόμενο του ιστότοπού σας. Περιηγηθείτε στις διαθέσιμες γλώσσες στον <a href="%s" target="_blank" rel="noopener">κατάλογο γλωσσών</a> ή μεταφορτώστε ένα πακέτο <b>.zip</b> για να εγκαταστήσετε τη δική σας.';
$lang['admin_languages_tip'] = 'Ενεργοποιήστε, απενεργοποιήστε, και ορίστε την προεπιλεγμένη γλώσσα του ιστοτόπου. Οι ενεργοποιημένες γλώσσες είναι διαθέσιμες στους επισκέπτες του ιστοτόπου.';
$lang['admin_languages_update_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ενημερώσετε αυτή τη γλώσσα;';
$lang['admin_languages_update_error'] = 'Η ενημέρωση της γλώσσας απέτυχε.';
$lang['admin_languages_update_success'] = 'Η γλώσσα ενημερώθηκε με επιτυχία.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'Το πακέτο υπάρχει ήδη.';
$lang['package_archive_download_failed'] = 'Αποτυχία λήψης του αρχείου πακέτου.';
$lang['package_backup_create_error'] = 'Αποτυχία δημιουργίας αντιγράφου ασφαλείας πακέτου.';
$lang['package_backup_dir_failed'] = 'Αποτυχία δημιουργίας καταλόγου αντιγράφων ασφαλείας %s';
$lang['package_backup_missing'] = 'Το αρχείο αντιγράφου ασφαλείας δεν υπάρχει.';
$lang['package_backup_path_error'] = 'Δεν ήταν δυνατή η ανίχνευση της διαδρομής του αρχείου αντιγράφου ασφαλείας.';
$lang['package_backup_request_invalid'] = 'Μη έγκυρο αίτημα αντιγράφου ασφαλείας.';
$lang['package_backup_restore_error'] = 'Αποτυχία επαναφοράς αντιγράφου ασφαλείας πακέτου.';
$lang['package_catalog_type_unknown'] = 'Άγνωστος τύπος καταλόγου.';
$lang['package_checksum_error'] = 'Η επαλήθευση αθorίσματος ελέγχου (checksum) του πακέτου απέτυχε.';
$lang['package_copy_files_error'] = 'Αποτυχία αντιγραφής των αρχείων του πακέτου στον προορισμό.';
$lang['package_copy_updates_error'] = 'Αποτυχία αντιγραφής των αρχείων ενημέρωσης στον προορισμό.';
$lang['package_dest_dir_failed'] = 'Αποτυχία δημιουργίας καταλόγου προορισμού %s';
$lang['package_destination_error'] = 'Δεν ήταν δυνατή η επίλυση του προορισμού του πακέτου.';
$lang['package_download_dir_failed'] = 'Αποτυχία δημιουργίας καταλόγου λήψης %s';
$lang['package_download_empty'] = 'Η λήψη του πακέτου επέστρεψε κενή απάντηση.';
$lang['package_download_request_invalid'] = 'Μη έγκυρο αίτημα λήψης πακέτου.';
$lang['package_extract_failed'] = 'Αποτυχία εξαγωγής του ZIP %s';
$lang['package_invalid_lang_files'] = 'Μη έγκυρη γλώσσα — λείπουν τα απαιτούμενα αρχεία γλώσσας της εφαρμογής.';
$lang['package_invalid_lang_structure'] = 'Μη έγκυρη γλώσσα — λείπουν οι φάκελοι admin και/ή ci3.';
$lang['package_invalid_missing_info'] = 'Μη έγκυρο %s: λείπει το "info.php".';
$lang['package_invalid_module_structure'] = 'Μη έγκυρο πρόσθετο/ενότητα — λείπουν οι απαιτούμενοι φάκελοι config και/ή controllers.';
$lang['package_invalid_plugin_boot'] = 'Μη έγκυρο plugin — λείπει το "boot.php".';
$lang['package_invalid_plugin_contents'] = 'Μη έγκυρο plugin — τα plugins δεν μπορούν να περιέχουν controllers ή views.';
$lang['package_invalid_theme_boot'] = 'Μη έγκυρο θέμα — λείπει το "boot.php".';
$lang['package_invalid_theme_views'] = 'Μη έγκυρο θέμα — λείπει ο φάκελος views.';
$lang['package_no_root_dir'] = 'Το πακέτο δεν περιέχει φάκελο ρίζας (root directory).';
$lang['package_not_downloadable'] = 'Το πακέτο δεν είναι διαθέσιμο για δημόσια λήψη.';
$lang['package_not_in_registry'] = 'Το πακέτο δεν είναι διαθέσιμο στο δημόσιο μητρώο.';
$lang['package_request_invalid'] = 'Μη έγκυρο αίτημα πακέτου.';
$lang['package_rollback_request_invalid'] = 'Μη έγκυρο αίτημα επαναφοράς (rollback).';
$lang['package_root_mismatch'] = 'Ο ριζικός φάκελος του αρχείου πακέτου δεν ταιριάζει με το %s';
$lang['package_single_root_required'] = 'Το πακέτο πρέπει να περιέχει ακριβώς έναν φάκελο ρίζας.';
$lang['package_source_error'] = 'Δεν ήταν δυνατή η επίλυση της πηγής του πακέτου.';
$lang['package_system_core_restricted'] = 'Τα στοιχεία του συστήματος δεν μπορούν να εγκατασταθούν ως πακέτα.';
$lang['package_temp_dir_failed'] = 'Αποτυχία δημιουργίας προσωρινού καταλόγου %s';
$lang['package_type_unknown'] = 'Άγνωστος τύπος πακέτου.';
$lang['package_update_request_invalid'] = 'Μη έγκυρο αίτημα ενημέρωσης πακέτου.';
$lang['package_update_root_mismatch'] = 'Ο ριζικός φάκελος του αρχείου ενημέρωσης δεν ταιριάζει με το %s.';
$lang['package_upload_dir_failed'] = 'Αποτυχία δημιουργίας καταλόγου μεταφόρτωσης %s';
$lang['package_url_invalid'] = 'Μη έγκυρο URL διανομής πακέτου.';
$lang['package_write_failed'] = 'Αποτυχία εγγραφής πακέτου στο %s';
$lang['package_zip_not_found'] = 'Το αρχείο ZIP του πακέτου δεν υπάρχει: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Διαθέσιμες νέες ενημερώσεις!';
$lang['update_backup_error'] = 'Αδυναμία δημιουργίας αντιγράφου ασφαλείας του υπάρχοντος πακέτου. Η ενημέρωση ματαιώθηκε.';
$lang['update_check_disabled'] = 'Οι αυτόματοι έλεγχοι ενημερώσεων είναι απενεργοποιημένοι. Ενεργοποιήστε τους για να δείτε τις ενημερώσεις.';
$lang['update_check_error'] = 'Αδυναμία εκτέλεσης του ελέγχου ενημερώσεων αυτή τη στιγμή.';
$lang['update_check_success'] = 'Ο έλεγχος ενημερώσεων ολοκληρώθηκε επιτυχώς.';
$lang['update_install_error'] = 'Το πακέτο δεν μπόρεσε να εγκατασταθεί. Διατηρήθηκε η προηγούμενη έκδοση.';
$lang['update_install_success'] = 'Το πακέτο ενημερώθηκε επιτυχώς στην πιο πρόσφατη έκδοση.';
$lang['update_interval_3days'] = 'Κάθε 3 ημέρες';
$lang['update_interval_biweekly'] = 'Κάθε 2 εβδομάδες';
$lang['update_interval_daily'] = 'Κάθε μέρα';
$lang['update_interval_monthly'] = 'Μία φορά το μήνα';
$lang['update_interval_weekly'] = 'Μία φορά την εβδομάδα';
$lang['update_not_available'] = 'Ο ιστότοπός σας είναι ενημερωμένος.';
$lang['update_rollback_confirm'] = 'Είστε βέβαιοι ότι θέλετε να επαναφέρετε την προηγούμενη έκδοση;';
$lang['update_rollback_error'] = 'Αδυναμία επαναφοράς της προηγούμενης έκδοσης. Ενδέχεται να απαιτηθεί χειροκίνητη παρέμβαση.';
$lang['update_rollback_success'] = 'Η προηγούμενη έκδοση επαναφέρθηκε επιτυχώς.';
$lang['updates_available'] = 'Διαθέσιμες ενημερώσεις';
$lang['updates_check_now'] = 'Έλεγχος τώρα';
$lang['updates_check_now_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ελέγξετε για ενημερώσεις τώρα;';
$lang['updates_current_version'] = 'Τρέχουσα έκδοση';
$lang['updates_enable'] = 'Ενεργοποίηση ενημερώσεων';
$lang['updates_last_check'] = 'Τελευταίος έλεγχος: %s';
$lang['updates_latest_version'] = 'Πιο πρόσφατη έκδοση';
$lang['updates_next_check'] = 'Επόμενος προγραμματισμένος έλεγχος: %s';
$lang['updates_previous_version'] = 'Προηγούμενη έκδοση';
$lang['updates_recent'] = 'Πρόσφατα ενημερωμένα';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Αποτυχία αποκλεισμού της καθορισμένης διεύθυνσης IP.';
$lang['admin_firewall_ban_success'] = 'Η διεύθυνση IP αποκλείστηκε επιτυχώς.';
$lang['admin_firewall_block_ip'] = 'Αποκλεισμός διεύθυνσης IP';
$lang['admin_firewall_delete_confirm'] = 'Είστε βέβαιοι ότι θέλετε να ξεμπλοκάρετε τις επιλεγμένες διευθύνσεις IP;';
$lang['admin_firewall_delete_error'] = 'Αποτυχία ξεμπλοκαρίσματος των επιλεγμένων διευθύνσεων IP.';
$lang['admin_firewall_delete_success'] = 'Οι επιλεγμένες διευθύνσεις IP ξεμπλοκαρίστηκαν επιτυχώς.';
$lang['admin_firewall_duration'] = 'Διάρκεια αποκλεισμού';
$lang['admin_firewall_permanent'] = 'Μόνιμος';
$lang['admin_firewall_reason'] = 'Λόγος αποκλεισμού';
$lang['admin_firewall_tip'] = 'Προβολή και διαχείριση διευθύνσεων IP που έχουν αποκλειστεί από το τείχος προστασίας λόγω επαναλαμβανόμενων παραβάσεων ή ύποπτης δραστηριότητας.';

// Settings
$lang['404_ban_duration'] = 'Διάρκεια αποκλεισμού 404';
$lang['404_threshold'] = 'Όριο σφαλμάτων 404';
$lang['uri_ban_duration'] = 'Διάρκεια αποκλεισμού URI';
$lang['uri_strike_threshold'] = 'Όριο URI';
