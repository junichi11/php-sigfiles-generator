<?php



namespace mysql_xdevapi {

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-baseresult.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface BaseResult {
	}

	/**
	 * <p>Provides access to the connection pool.</p>
	 * @link https://php.net/manual/en/class.mysql-xdevapi-client.php
	 * @since No version information available, might only be in Git
	 */
	class Client {

		/**
		 * Close client
		 * <p>Close all client connections with the server.</p>
		 * @return bool <p><b><code>true</code></b> if connections are closed.</p>
		 * @link https://php.net/manual/en/mysql-xdevapi-client.close.php
		 * @since No version information available, might only be in Git
		 */
		public function close(): bool {}
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-collection.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Collection implements \mysql_xdevapi\SchemaObject {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-collection.php#mysql-xdevapi-collection.props.name
		 */
		public $name;
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-collectionadd.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class CollectionAdd implements \mysql_xdevapi\Executable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-collectionfind.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class CollectionFind implements \mysql_xdevapi\Executable, \mysql_xdevapi\CrudOperationBindable, \mysql_xdevapi\CrudOperationLimitable, \mysql_xdevapi\CrudOperationSortable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-collectionmodify.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class CollectionModify implements \mysql_xdevapi\Executable, \mysql_xdevapi\CrudOperationBindable, \mysql_xdevapi\CrudOperationLimitable, \mysql_xdevapi\CrudOperationSkippable, \mysql_xdevapi\CrudOperationSortable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-collectionremove.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class CollectionRemove implements \mysql_xdevapi\Executable, \mysql_xdevapi\CrudOperationBindable, \mysql_xdevapi\CrudOperationLimitable, \mysql_xdevapi\CrudOperationSortable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-columnresult.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class ColumnResult {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-crudoperationbindable.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface CrudOperationBindable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-crudoperationlimitable.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface CrudOperationLimitable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-crudoperationskippable.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface CrudOperationSkippable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-crudoperationsortable.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface CrudOperationSortable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-databaseobject.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface DatabaseObject {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-docresult.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class DocResult implements \mysql_xdevapi\BaseResult, \Traversable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-exception.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Exception extends \RuntimeException implements \Throwable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-executable.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface Executable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-executionstatus.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class ExecutionStatus {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-executionstatus.php#mysql-xdevapi-executionstatus.props.affecteditems
		 */
		public $affectedItems;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-executionstatus.php#mysql-xdevapi-executionstatus.props.matcheditems
		 */
		public $matchedItems;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-executionstatus.php#mysql-xdevapi-executionstatus.props.founditems
		 */
		public $foundItems;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-executionstatus.php#mysql-xdevapi-executionstatus.props.lastinsertid
		 */
		public $lastInsertId;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-executionstatus.php#mysql-xdevapi-executionstatus.props.lastdocumentid
		 */
		public $lastDocumentId;
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-expression.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Expression {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-expression.php#mysql-xdevapi-expression.props.name
		 */
		public $name;
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-result.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Result implements \mysql_xdevapi\BaseResult, \Traversable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-rowresult.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class RowResult implements \mysql_xdevapi\BaseResult, \Traversable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-schema.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Schema implements \mysql_xdevapi\DatabaseObject {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-schema.php#mysql-xdevapi-schema.props.name
		 */
		public $name;
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-schemaobject.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	interface SchemaObject {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-session.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Session {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-sqlstatement.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class SqlStatement {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.mysql-xdevapi-sqlstatement.php
		 */
		const EXECUTE_ASYNC = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.mysql-xdevapi-sqlstatement.php
		 */
		const BUFFERED = 2;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-sqlstatement.php#mysql-xdevapi-sqlstatement.props.statement
		 */
		public $statement;
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-sqlstatementresult.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class SqlStatementResult implements \mysql_xdevapi\BaseResult, \Traversable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-statement.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Statement {

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.mysql-xdevapi-statement.php
		 */
		const EXECUTE_ASYNC = 1;

		/**
		 * @var int
		 * @link https://php.net/manual/en/class.mysql-xdevapi-statement.php
		 */
		const BUFFERED = 2;
	}

	/**
	 * <p>Provides access to the table through INSERT/SELECT/UPDATE/DELETE statements.</p>
	 * @link https://php.net/manual/en/class.mysql-xdevapi-table.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Table implements \mysql_xdevapi\SchemaObject {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-table.php#mysql-xdevapi-table.props.name
		 */
		public $name;
	}

	/**
	 * <p>A statement for delete operations on Table.</p>
	 * @link https://php.net/manual/en/class.mysql-xdevapi-tabledelete.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class TableDelete implements \mysql_xdevapi\Executable {
	}

	/**
	 * <p>A statement for insert operations on Table.</p>
	 * @link https://php.net/manual/en/class.mysql-xdevapi-tableinsert.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class TableInsert implements \mysql_xdevapi\Executable {
	}

	/**
	 * <p>A statement for record retrieval operations on a Table.</p>
	 * @link https://php.net/manual/en/class.mysql-xdevapi-tableselect.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class TableSelect implements \mysql_xdevapi\Executable {
	}

	/**
	 * <p>A statement for record update operations on a Table.</p>
	 * @link https://php.net/manual/en/class.mysql-xdevapi-tableupdate.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class TableUpdate implements \mysql_xdevapi\Executable {
	}

	/**
	 * @link https://php.net/manual/en/class.mysql-xdevapi-warning.php
	 * @since PECL mysql-xdevapi >= 8.0.11
	 */
	class Warning {

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-warning.php#mysql-xdevapi-warning.props.message
		 */
		public $message;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-warning.php#mysql-xdevapi-warning.props.level
		 */
		public $level;

		/**
		 * @var mixed
		 * @link https://php.net/manual/en/class.mysql-xdevapi-warning.php#mysql-xdevapi-warning.props.code
		 */
		public $code;
	}

}
