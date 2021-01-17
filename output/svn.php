<?php



namespace {

	/**
	 * Schedules the addition of an item in a working directory
	 * <p>Adds the file, directory or symbolic link at <code>path</code> to the working directory. The item will be added to the repository the next time you call <code>svn_commit()</code> on the working copy.</p>
	 * @param string $path <p>Path of item to add.</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param bool $recursive <p>If item is directory, whether or not to recursively add all of its contents. Default is <b><code>true</code></b></p>
	 * @param bool $force <p>If true, Subversion will recurse into already versioned directories in order to add unversioned files that may be hiding in those directories. Default is <b><code>false</code></b></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-add.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_add(string $path, bool $recursive = true, bool $force = false): bool {}

	/**
	 * Retrieves authentication parameter
	 * <p>Retrieves authentication parameter at <code>key</code>. For a list of valid keys and their meanings, consult the authentication constants list.</p>
	 * @param string $key <p>String key name. Use the authentication constants defined by this extension to specify a key.</p>
	 * @return string <p>Returns the string value of the parameter at <code>key</code>; returns <b><code>null</code></b> if parameter does not exist.</p>
	 * @link https://php.net/manual/en/function.svn-auth-get-parameter.php
	 * @see svn_auth_set_parameter()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_auth_get_parameter(string $key): string {}

	/**
	 * Sets an authentication parameter
	 * <p>Sets authentication parameter at <code>key</code> to <code>value</code>. For a list of valid keys and their meanings, consult the authentication constants list.</p>
	 * @param string $key <p>String key name. Use the authentication constants defined by this extension to specify a key.</p>
	 * @param string $value <p>String value to set to parameter at key. Format of value varies with the parameter.</p>
	 * @return void <p>No value is returned.</p>
	 * @link https://php.net/manual/en/function.svn-auth-set-parameter.php
	 * @see svn_auth_get_parameter()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_auth_set_parameter(string $key, string $value): void {}

	/**
	 * Get the SVN blame for a file
	 * <p>Get the SVN blame of a file from a repository URL.</p>
	 * @param string $repository_url <p>The repository URL.</p>
	 * @param int $revision_no <p>The revision number.</p>
	 * @return array <p>An <code>array</code> of SVN blame information separated by line which includes the revision number, line number, line of code, author, and date.</p>
	 * @link https://php.net/manual/en/function.svn-blame.php
	 * @see svn_diff(), svn_status()
	 * @since PECL svn >= 0.3.0
	 */
	function svn_blame(string $repository_url, int $revision_no = SVN_REVISION_HEAD): array {}

	/**
	 * Returns the contents of a file in a repository
	 * <p>Returns the contents of the URL <code>repos_url</code> to a file in the repository, optionally at revision number <code>revision_no</code>.</p>
	 * @param string $repos_url <p>String URL path to item in a repository.</p>
	 * @param int $revision_no <p>Integer revision number of item to retrieve, default is the HEAD revision.</p>
	 * @return string <p>Returns the string contents of the item from the repository on success, and <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-cat.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_cat(string $repos_url, int $revision_no = null): string {}

	/**
	 * Checks out a working copy from the repository
	 * <p>Checks out a working copy from the repository at <code>repos</code> to <code>targetpath</code> at revision <code>revision</code>.</p>
	 * @param string $repos <p>String URL path to directory in repository to check out.</p>
	 * @param string $targetpath <p>String local path to directory to check out in to</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param int $revision <p>Integer revision number of repository to check out. Default is HEAD, the most recent revision.</p>
	 * @param int $flags <p>Any combination of <b><code>SVN_NON_RECURSIVE</code></b> and <b><code>SVN_IGNORE_EXTERNALS</code></b>.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-checkout.php
	 * @see svn_add(), svn_commit(), svn_status(), svn_update()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_checkout(string $repos, string $targetpath, int $revision = null, int $flags = 0): bool {}

	/**
	 * Recursively cleanup a working copy directory, finishing incomplete operations and removing locks
	 * <p>Recursively cleanup working copy directory <code>workingdir</code>, finishing any incomplete operations and removing working copy locks. Use when a working copy is in limbo and needs to be usable again.</p>
	 * @param string $workingdir <p>String path to local working directory to cleanup</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-cleanup.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_cleanup(string $workingdir): bool {}

	/**
	 * Returns the version of the SVN client libraries
	 * <p>Returns the version of the SVN client libraries</p>
	 * @return string <p>String version number, usually in form of x.y.z.</p>
	 * @link https://php.net/manual/en/function.svn-client-version.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_client_version(): string {}

	/**
	 * Sends changes from the local working copy to the repository
	 * <p>Commits changes made in the local working copy files enumerated in the <code>targets</code> array to the repository, with the log message <code>log</code>. Directories in the <code>targets</code> array will be recursively committed unless <code>recursive</code> is set to <b><code>false</code></b>.</p><p><b>Note</b>:  This function does not have any parameters for specifying authentication, so a username and password must be set using <code>svn_auth_set_parameter()</code> </p>
	 * @param string $log <p>String log text to commit</p>
	 * @param array $targets <p>Array of local paths of files to be committed</p> <p><b>Warning</b></p> <p>This parameter must be an array, a string for a single target is not acceptable.</p>  <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param bool $recursive <p>Boolean flag to disable recursive committing of directories in the <code>targets</code> array. Default is <b><code>true</code></b>.</p>
	 * @return array <p>Returns array in form of:</p> <pre>array( 0 =&gt; integer revision number of commit 1 =&gt; string ISO 8601 date and time of commit 2 =&gt; name of committer )</pre>  <p>Returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-commit.php
	 * @see svn_auth_set_parameter()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_commit(string $log, array $targets, bool $recursive = true): array {}

	/**
	 * Delete items from a working copy or repository
	 * <p>Deletes the file, directory or symbolic link at <code>path</code> from the working directory. The item will be deleted from the repository the next time you call <code>svn_commit()</code> on the working copy.</p>
	 * @param string $path <p>Path of item to delete.</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param bool $force <p>If <b><code>true</code></b>, the file will be deleted even if it has local modifications. Otherwise, local modifications will result in a failure. Default is <b><code>false</code></b></p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-delete.php
	 * @since PECL svn >= 0.4.0
	 */
	function svn_delete(string $path, bool $force = false): bool {}

	/**
	 * Recursively diffs two paths
	 * <p>Recursively diffs two paths, <code>path1</code> and <code>path2</code>.</p><p><b>Note</b>:</p><p>This is not a general-purpose diff utility. Only local files that are versioned may be diffed: other files will fail.</p>
	 * @param string $path1 <p>First path to diff. This can be a URL to a file/directory in an SVN repository or a local file/directory path.</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p> <p><b>Warning</b></p> <p>If a local file path has only backslashes and no forward slashes, this extension will fail to find the path. Always replace all backslashes with forward slashes when using this function.</p>
	 * @param int $rev1 <p>First path's revision number. Use <b><code>SVN_REVISION_HEAD</code></b> to specify the most recent revision.</p>
	 * @param string $path2 <p>Second path to diff. See <code>path1</code> for description.</p>
	 * @param int $rev2 <p>Second path's revision number. See <code>rev1</code> for description.</p>
	 * @return array <p>Returns an array-list consisting of two streams: the first is the diff output and the second contains error stream output. The streams can be read using <code>fread()</code>. Returns <b><code>false</code></b> or <b><code>null</code></b> on error.</p><p>The diff output will, by default, be in the form of Subversion's custom unified diff format, but an external diff engine may be used depending on Subversion's configuration.</p>
	 * @link https://php.net/manual/en/function.svn-diff.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_diff(string $path1, int $rev1, string $path2, int $rev2): array {}

	/**
	 * Export the contents of a SVN directory
	 * <p>Export the contents of either a working copy or repository into a 'clean' directory.</p>
	 * @param string $frompath <p>The path to the current repository.</p>
	 * @param string $topath <p>The path to the new repository.</p>
	 * @param bool $working_copy <p>If <b><code>true</code></b>, it will export uncommitted files from the working copy.</p>
	 * @param int $revision_no
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-export.php
	 * @see svn_import()
	 * @since PECL svn >= 0.3.0
	 */
	function svn_export(string $frompath, string $topath, bool $working_copy = true, int $revision_no = -1): bool {}

	/**
	 * Abort a transaction, returns true if everything is okay, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Abort a transaction, returns true if everything is okay, false otherwise</p>
	 * @param resource $txn
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-abort-txn.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_abort_txn($txn): bool {}

	/**
	 * Creates and returns a stream that will be used to replace
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Creates and returns a stream that will be used to replace</p>
	 * @param resource $root
	 * @param string $path
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-fs-apply-text.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_apply_text($root, string $path) {}

	/**
	 * Create a new transaction
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Create a new transaction</p>
	 * @param resource $repos
	 * @param int $rev
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-fs-begin-txn2.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_begin_txn2($repos, int $rev) {}

	/**
	 * Return true if everything is ok, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Return true if everything is ok, false otherwise</p>
	 * @param resource $root
	 * @param string $path
	 * @param string $name
	 * @param string $value
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-change-node-prop.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_change_node_prop($root, string $path, string $name, string $value): bool {}

	/**
	 * Determines what kind of item lives at path in a given repository fsroot
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Determines what kind of item lives at path in a given repository fsroot</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return int
	 * @link https://php.net/manual/en/function.svn-fs-check-path.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_check_path($fsroot, string $path): int {}

	/**
	 * Return true if content is different, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Return true if content is different, false otherwise</p>
	 * @param resource $root1
	 * @param string $path1
	 * @param resource $root2
	 * @param string $path2
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-contents-changed.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_contents_changed($root1, string $path1, $root2, string $path2): bool {}

	/**
	 * Copies a file or a directory, returns true if all is ok, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Copies a file or a directory, returns true if all is ok, false otherwise</p>
	 * @param resource $from_root
	 * @param string $from_path
	 * @param resource $to_root
	 * @param string $to_path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-copy.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_copy($from_root, string $from_path, $to_root, string $to_path): bool {}

	/**
	 * Deletes a file or a directory, return true if all is ok, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Deletes a file or a directory, return true if all is ok, false otherwise</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-delete.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_delete($root, string $path): bool {}

	/**
	 * Enumerates the directory entries under path; returns a hash of dir names to file type
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Enumerates the directory entries under path; returns a hash of dir names to file type</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return array
	 * @link https://php.net/manual/en/function.svn-fs-dir-entries.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_dir_entries($fsroot, string $path): array {}

	/**
	 * Returns a stream to access the contents of a file from a given version of the fs
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns a stream to access the contents of a file from a given version of the fs</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-fs-file-contents.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_file_contents($fsroot, string $path) {}

	/**
	 * Returns the length of a file from a given version of the fs
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the length of a file from a given version of the fs</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return int
	 * @link https://php.net/manual/en/function.svn-fs-file-length.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_file_length($fsroot, string $path): int {}

	/**
	 * Return true if the path points to a directory, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Return true if the path points to a directory, false otherwise</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-is-dir.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_is_dir($root, string $path): bool {}

	/**
	 * Return true if the path points to a file, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Return true if the path points to a file, false otherwise</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-is-file.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_is_file($root, string $path): bool {}

	/**
	 * Creates a new empty directory, returns true if all is ok, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Creates a new empty directory, returns true if all is ok, false otherwise</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-make-dir.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_make_dir($root, string $path): bool {}

	/**
	 * Creates a new empty file, returns true if all is ok, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Creates a new empty file, returns true if all is ok, false otherwise</p>
	 * @param resource $root
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-make-file.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_make_file($root, string $path): bool {}

	/**
	 * Returns the revision in which path under fsroot was created
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the revision in which path under fsroot was created</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @return int
	 * @link https://php.net/manual/en/function.svn-fs-node-created-rev.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_node_created_rev($fsroot, string $path): int {}

	/**
	 * Returns the value of a property for a node
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the value of a property for a node</p>
	 * @param resource $fsroot
	 * @param string $path
	 * @param string $propname
	 * @return string
	 * @link https://php.net/manual/en/function.svn-fs-node-prop.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_node_prop($fsroot, string $path, string $propname): string {}

	/**
	 * Return true if props are different, false otherwise
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Return true if props are different, false otherwise</p>
	 * @param resource $root1
	 * @param string $path1
	 * @param resource $root2
	 * @param string $path2
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-fs-props-changed.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_props_changed($root1, string $path1, $root2, string $path2): bool {}

	/**
	 * Fetches the value of a named property
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Fetches the value of a named property</p>
	 * @param resource $fs
	 * @param int $revnum
	 * @param string $propname
	 * @return string
	 * @link https://php.net/manual/en/function.svn-fs-revision-prop.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_revision_prop($fs, int $revnum, string $propname): string {}

	/**
	 * Get a handle on a specific version of the repository root
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Get a handle on a specific version of the repository root</p>
	 * @param resource $fs
	 * @param int $revnum
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-fs-revision-root.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_revision_root($fs, int $revnum) {}

	/**
	 * Creates and returns a transaction root
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Creates and returns a transaction root</p>
	 * @param resource $txn
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-fs-txn-root.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_fs_txn_root($txn) {}

	/**
	 * Returns the number of the youngest revision in the filesystem
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Returns the number of the youngest revision in the filesystem</p>
	 * @param resource $fs
	 * @return int
	 * @link https://php.net/manual/en/function.svn-fs-youngest-rev.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_fs_youngest_rev($fs): int {}

	/**
	 * Imports an unversioned path into a repository
	 * <p>Commits unversioned <code>path</code> into repository at <code>url</code>. If <code>path</code> is a directory and <code>nonrecursive</code> is <b><code>false</code></b>, the directory will be imported recursively.</p>
	 * @param string $path <p>Path of file or directory to import.</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param string $url <p>Repository URL to import into.</p>
	 * @param bool $nonrecursive <p>Whether or not to refrain from recursively processing directories.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-import.php
	 * @see svn_add()
	 * @since PECL svn >= 0.2.0
	 */
	function svn_import(string $path, string $url, bool $nonrecursive): bool {}

	/**
	 * Returns the commit log messages of a repository URL
	 * <p><b>svn_log()</b> returns the complete history of the item at the repository URL <code>repos_url</code>, or the history of a specific revision if <code>start_revision</code> is set. This function is equivalent to <b><code>svn log --verbose -r $start_revision $repos_url</code></b>.</p>
	 * @param string $repos_url <p>Repository URL of the item to retrieve log history from.</p>
	 * @param int $start_revision <p>Revision number of the first log to retrieve. Use <b><code>SVN_REVISION_HEAD</code></b> to retrieve the log from the most recent revision.</p>
	 * @param int $end_revision <p>Revision number of the last log to retrieve. Defaults to <code>start_revision</code> if specified or to <b><code>SVN_REVISION_INITIAL</code></b> otherwise.</p>
	 * @param int $limit <p>Number of logs to retrieve.</p>
	 * @param int $flags <p>Any combination of <b><code>SVN_OMIT_MESSAGES</code></b>, <b><code>SVN_DISCOVER_CHANGED_PATHS</code></b> and <b><code>SVN_STOP_ON_COPY</code></b>.</p>
	 * @return array <p>On success, this function returns an array file listing in the format of:</p> <pre>[0] =&gt; Array, ordered most recent (highest) revision first ( [rev] =&gt; integer revision number [author] =&gt; string author name [msg] =&gt; string log message [date] =&gt; string date formatted per ISO 8601, i.e. date('c') [paths] =&gt; Array, describing changed files ( [0] =&gt; Array ( [action] =&gt; string letter signifying change [path] =&gt; absolute repository path of changed file ) [1] =&gt; ... ) ) [1] =&gt; ...</pre>  <p><b>Note</b>:</p><p>The output will always be a numerically indexed array of arrays, even when there are none or only one log message(s).</p> <p>The value of action is a subset of the status output in the first column, where possible values are:</p> <b>Actions</b>   Letter Description     M Item/props was modified   A Item was added   D Item was deleted   R Item was replaced   <p>If no changes were made to the item, an empty array is returned.</p>
	 * @link https://php.net/manual/en/function.svn-log.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_log(string $repos_url, int $start_revision = null, int $end_revision = null, int $limit = 0, int $flags = SVN_DISCOVER_CHANGED_PATHS | SVN_STOP_ON_COPY): array {}

	/**
	 * Returns list of directory contents in repository URL, optionally at revision number
	 * <p>This function queries the repository URL and returns a list of files and directories, optionally from a specific revision. This is equivalent to <b><code>svn list $repos_url[@$revision_no]</code></b></p><p><b>Note</b>:</p><p>This function does not work with working copies. <code>repos_url</code> <i>must</i> be a repository URL.</p>
	 * @param string $repos_url
	 * @param int $revision_no
	 * @param bool $recurse <p>Enables recursion.</p>
	 * @param bool $peg
	 * @return array <p>On success, this function returns an array file listing in the format of:</p> <pre>[0] =&gt; Array ( [created_rev] =&gt; integer revision number of last edit [last_author] =&gt; string author name of last edit [size] =&gt; integer byte file size of file [time] =&gt; string date of last edit in form 'M d H:i' or 'M d Y', depending on how old the file is [time_t] =&gt; integer unix timestamp of last edit [name] =&gt; name of file/directory [type] =&gt; type, can be 'file' or 'dir' ) [1] =&gt; ...</pre>
	 * @link https://php.net/manual/en/function.svn-ls.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_ls(string $repos_url, int $revision_no = SVN_REVISION_HEAD, bool $recurse = false, bool $peg = false): array {}

	/**
	 * Creates a directory in a working copy or repository
	 * <p>Creates a directory in a working copy or repository.</p>
	 * @param string $path <p>The path to the working copy or repository.</p>
	 * @param string $log_message
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-mkdir.php
	 * @see svn_add()
	 * @since PECL svn >= 0.4.0
	 */
	function svn_mkdir(string $path, string $log_message = null): bool {}

	/**
	 * Create a new subversion repository at path
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Create a new subversion repository at path</p>
	 * @param string $path
	 * @param array $config
	 * @param array $fsconfig
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-repos-create.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_create(string $path, array $config = null, array $fsconfig = null) {}

	/**
	 * Gets a handle on the filesystem for a repository
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Gets a handle on the filesystem for a repository</p>
	 * @param resource $repos
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-repos-fs.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_fs($repos) {}

	/**
	 * Create a new transaction
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Create a new transaction</p>
	 * @param resource $repos
	 * @param int $rev
	 * @param string $author
	 * @param string $log_msg
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-repos-fs-begin-txn-for-commit.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_repos_fs_begin_txn_for_commit($repos, int $rev, string $author, string $log_msg) {}

	/**
	 * Commits a transaction and returns the new revision
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Commits a transaction and returns the new revision</p>
	 * @param resource $txn
	 * @return int
	 * @link https://php.net/manual/en/function.svn-repos-fs-commit-txn.php
	 * @since PECL svn >= 0.2.0
	 */
	function svn_repos_fs_commit_txn($txn): int {}

	/**
	 * Make a hot-copy of the repos at repospath; copy it to destpath
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Make a hot-copy of the repos at repospath; copy it to destpath</p>
	 * @param string $repospath
	 * @param string $destpath
	 * @param bool $cleanlogs
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-repos-hotcopy.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_hotcopy(string $repospath, string $destpath, bool $cleanlogs): bool {}

	/**
	 * Open a shared lock on a repository
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Open a shared lock on a repository.</p>
	 * @param string $path
	 * @return resource
	 * @link https://php.net/manual/en/function.svn-repos-open.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_open(string $path) {}

	/**
	 * Run recovery procedures on the repository located at path
	 * <p>This function is currently not documented; only its argument list is available.</p><p>Run recovery procedures on the repository located at path.</p>
	 * @param string $path
	 * @return bool
	 * @link https://php.net/manual/en/function.svn-repos-recover.php
	 * @since PECL svn >= 0.1.0
	 */
	function svn_repos_recover(string $path): bool {}

	/**
	 * Revert changes to the working copy
	 * <p>Revert any local changes to the path in a working copy.</p>
	 * @param string $path <p>The path to the working repository.</p>
	 * @param bool $recursive <p>Optionally make recursive changes.</p>
	 * @return bool <p>Returns <b><code>true</code></b> on success or <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-revert.php
	 * @see svn_delete(), svn_export()
	 * @since PECL svn >= 0.3.0
	 */
	function svn_revert(string $path, bool $recursive = false): bool {}

	/**
	 * Returns the status of working copy files and directories
	 * <p>Returns the status of working copy files and directories, giving modifications, additions, deletions and other changes to items in the working copy.</p>
	 * @param string $path <p>Local path to file or directory to retrieve status of.</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param int $flags <p>Any combination of <b><code>Svn::NON_RECURSIVE</code></b>, <b><code>Svn::ALL</code></b> (regardless of modification status), <b><code>Svn::SHOW_UPDATES</code></b> (entries will be added for items that are out-of-date), <b><code>Svn::NO_IGNORE</code></b> (disregard <code>svn:ignore</code> properties when scanning for new files) and <b><code>Svn::IGNORE_EXTERNALS</code></b>.</p>
	 * @return array <p>Returns a numerically indexed array of associative arrays detailing the status of items in the repository:</p> <pre>Array ( [0] =&gt; Array ( // information on item ) [1] =&gt; ... )</pre>  <p>The information on the item is an associative array that can contain the following keys:</p>  path   String path to file/directory of this entry on local filesystem.    text_status   Status of item's text. Refer to status constants for possible values.    repos_text_status   Status of item's text in repository. Only accurate if <code>update</code> was set to <b><code>true</code></b>. Refer to status constants for possible values.    prop_status   Status of item's properties. Refer to status constants for possible values.    repos_prop_status   Status of item's property in repository. Only accurate if <code>update</code> was set to <b><code>true</code></b>. Refer to status constants for possible values.    locked   Whether or not the item is locked. (Only set if <b><code>true</code></b>.)    copied   Whether or not the item was copied (scheduled for addition with history). (Only set if <b><code>true</code></b>.)    switched   Whether or not the item was switched using the switch command. (Only set if <b><code>true</code></b>)   <p>These keys are only set if the item is versioned:</p>  name   Base name of item in repository.    url   URL of item in repository.    repos   Base URL of repository.    revision   Integer revision of item in working copy.    kind   Type of item, i.e. file or directory. Refer to type constants for possible values.    schedule   Scheduled action for item, i.e. addition or deletion. Constants for these magic numbers are not available, they can be emulated by using:   <code> &lt;&#63;php<br>if&nbsp;(!defined('svn_wc_schedule_normal'))&nbsp;{<br>&nbsp;&nbsp;&nbsp;&nbsp;define('svn_wc_schedule_normal',&nbsp;&nbsp;0);&nbsp;//&nbsp;nothing&nbsp;special<br>&nbsp;&nbsp;&nbsp;&nbsp;define('svn_wc_schedule_add',&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1);&nbsp;//&nbsp;item&nbsp;will&nbsp;be&nbsp;added<br>&nbsp;&nbsp;&nbsp;&nbsp;define('svn_wc_schedule_delete',&nbsp;&nbsp;2);&nbsp;//&nbsp;item&nbsp;will&nbsp;be&nbsp;deleted<br>&nbsp;&nbsp;&nbsp;&nbsp;define('svn_wc_schedule_replace',&nbsp;3);&nbsp;//&nbsp;item&nbsp;will&nbsp;be&nbsp;added&nbsp;and&nbsp;deleted<br>}<br>&#63;&gt;  </code>    deleted   Whether or not the item was deleted, but parent revision lags behind. (Only set if <b><code>true</code></b>.)    absent   Whether or not the item is absent, that is, Subversion knows that there should be something there but there isn't. (Only set if <b><code>true</code></b>.)    incomplete   Whether or not the entries file for a directory is incomplete. (Only set if <b><code>true</code></b>.)    cmt_date   Integer Unix timestamp of last commit date. (Unaffected by <code>update</code>.)    cmt_rev   Integer revision of last commit. (Unaffected by <code>update</code>.)    cmt_author   String author of last commit. (Unaffected by <code>update</code>.)    prop_time   Integer Unix timestamp of last up-to-date time for properties    text_time   Integer Unix timestamp of last up-to-date time for text
	 * @link https://php.net/manual/en/function.svn-status.php
	 * @see svn_update(), svn_log()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_status(string $path, int $flags = 0): array {}

	/**
	 * Update working copy
	 * <p>Update working copy at <code>path</code> to revision <code>revno</code>. If <code>recurse</code> is true, directories will be recursively updated.</p>
	 * @param string $path <p>Path to local working copy.</p> <p><b>Note</b>: Relative paths will be resolved as if the current working directory was the one that contains the PHP binary. To use the calling script's working directory, use <code>realpath()</code> or dirname(__FILE__).</p>
	 * @param int $revno <p>Revision number to update to, default is <b><code>SVN_REVISION_HEAD</code></b>.</p>
	 * @param bool $recurse <p>Whether or not to recursively update directories.</p>
	 * @return int <p>Returns new revision number on success, returns <b><code>false</code></b> on failure.</p>
	 * @link https://php.net/manual/en/function.svn-update.php
	 * @see svn_checkout(), svn_commit()
	 * @since PECL svn >= 0.1.0
	 */
	function svn_update(string $path, int $revno = SVN_REVISION_HEAD, bool $recurse = true): int {}

	/**
	 * Custom property for ignoring SSL cert verification errors
	 */
	define('PHP_SVN_AUTH_PARAM_IGNORE_SSL_VERIFY_ERRORS', null);

	define('SVN_AUTH_PARAM_CONFIG', null);

	define('SVN_AUTH_PARAM_CONFIG_DIR', null);

	/**
	 * Property for default password to use when performing basic authentication
	 */
	define('SVN_AUTH_PARAM_DEFAULT_PASSWORD', null);

	/**
	 * Property for default username to use when performing basic authentication
	 */
	define('SVN_AUTH_PARAM_DEFAULT_USERNAME', null);

	define('SVN_AUTH_PARAM_DONT_STORE_PASSWORDS', null);

	define('SVN_AUTH_PARAM_NO_AUTH_CACHE', null);

	define('SVN_AUTH_PARAM_NON_INTERACTIVE', null);

	define('SVN_AUTH_PARAM_SERVER_GROUP', null);

	define('SVN_AUTH_PARAM_SSL_SERVER_CERT_INFO', null);

	define('SVN_AUTH_PARAM_SSL_SERVER_FAILURES', null);

	/**
	 * Configuration key that determines filesystem type
	 */
	define('SVN_FS_CONFIG_FS_TYPE', null);

	/**
	 * Filesystem is Berkeley-DB implementation
	 */
	define('SVN_FS_TYPE_BDB', null);

	/**
	 * Filesystem is native-filesystem implementation
	 */
	define('SVN_FS_TYPE_FSFS', null);

	/**
	 * Directory
	 */
	define('SVN_NODE_DIR', null);

	/**
	 * File
	 */
	define('SVN_NODE_FILE', null);

	/**
	 * Absent
	 */
	define('SVN_NODE_NONE', null);

	/**
	 * Something Subversion cannot identify
	 */
	define('SVN_NODE_UNKNOWN', null);

	/**
	 * svn:author
	 */
	define('SVN_PROP_REVISION_AUTHOR', null);

	/**
	 * svn:date
	 */
	define('SVN_PROP_REVISION_DATE', null);

	/**
	 * svn:log
	 */
	define('SVN_PROP_REVISION_LOG', null);

	/**
	 * svn:original-date
	 */
	define('SVN_PROP_REVISION_ORIG_DATE', null);

	/**
	 * Magic number (-1) specifying the HEAD revision
	 */
	define('SVN_REVISION_HEAD', null);

	/**
	 * Item is scheduled for addition
	 */
	define('SVN_WC_STATUS_ADDED', null);

	/**
	 * Item's local modifications conflicted with repository modifications
	 */
	define('SVN_WC_STATUS_CONFLICTED', null);

	/**
	 * Item is scheduled for deletion
	 */
	define('SVN_WC_STATUS_DELETED', null);

	/**
	 * Unversioned path that is populated using svn:externals
	 */
	define('SVN_WC_STATUS_EXTERNAL', null);

	/**
	 * Item is unversioned but configured to be ignored
	 */
	define('SVN_WC_STATUS_IGNORED', null);

	/**
	 * Directory does not contain complete entries list
	 */
	define('SVN_WC_STATUS_INCOMPLETE', null);

	/**
	 * Item's local modifications were merged with repository modifications
	 */
	define('SVN_WC_STATUS_MERGED', null);

	/**
	 * Item is versioned but missing from the working copy
	 */
	define('SVN_WC_STATUS_MISSING', null);

	/**
	 * Item (text or properties) was modified
	 */
	define('SVN_WC_STATUS_MODIFIED', null);

	/**
	 * Status does not exist
	 */
	define('SVN_WC_STATUS_NONE', null);

	/**
	 * Item exists, nothing else is happening
	 */
	define('SVN_WC_STATUS_NORMAL', null);

	/**
	 * Unversioned item is in the way of a versioned resource
	 */
	define('SVN_WC_STATUS_OBSTRUCTED', null);

	/**
	 * Item was deleted and then re-added
	 */
	define('SVN_WC_STATUS_REPLACED', null);

	/**
	 * Item is not versioned in working copy
	 */
	define('SVN_WC_STATUS_UNVERSIONED', null);

}
