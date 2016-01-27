-- add table prefix if you have one
DELETE FROM core_config_data WHERE path like 'ffuenf_transactionalemails/%';
DELETE FROM core_config_data WHERE path = 'advanced/modules_disable_output/Ffuenf_TransactionalEmails';
DELETE FROM core_resource WHERE code = 'ffuenf_transactionalemails_setup';