<?php



namespace {

	/**
	 * List running processes
	 * <p>Retrieves statistics about all running processes.</p>
	 * @return array <p>Returns <b><code>FALSE</code></b> on failure, or an array consisting of process statistics like <code>win32_ps_stat_proc()</code> returns for all running processes on success.</p>
	 * @link http://php.net/manual/en/function.win32-ps-list-procs.php
	 * @see win32_ps_stat_proc()
	 * @since PECL win32ps >= 1.0.1
	 */
	function win32_ps_list_procs(): array {}

	/**
	 * Stat memory utilization
	 * <p>Retrieves statistics about the global memory utilization.</p>
	 * @return array <p>Returns <b><code>FALSE</code></b> on failure, or an array consisting of the following information on success:</p>  <code>load</code>  <p>The current memory load in percent of physical memory.</p>   <code>unit</code>  <p>This is always 1024, and indicates that the following values are the count of 1024 bytes.</p>   <code>total_phys</code>  <p>The amount of total physical memory.</p>   <code>avail_phys</code>  <p>The amount of still available physical memory.</p>   <code>total_pagefile</code>  <p>The amount of total pageable memory (physical memory + paging file).</p>   <code>avail_pagefile</code>  <p>The amount of still available pageable memory (physical memory + paging file).</p>   <code>total_virtual</code>  <p>The amount of total virtual memory for a process.</p>   <code>avail_virtual</code>  <p>The amount of still available virtual memory for a process.</p>
	 * @link http://php.net/manual/en/function.win32-ps-stat-mem.php
	 * @since PECL win32ps >= 1.0.1
	 */
	function win32_ps_stat_mem(): array {}

	/**
	 * Stat process
	 * <p>Retrieves statistics about the process with the process id <code>pid</code>.</p>
	 * @param int $pid <p>The process id of the process to stat. If omitted, the id of the current process.</p>
	 * @return array <p>Returns <b><code>FALSE</code></b> on failure, or an array consisting of the following information on success:</p>  <code>pid</code>  <p>The process id.</p>   <code>exe</code>  <p>The path to the executable image.</p>   <code>mem</code>  <p>An array containing information about the following memory utilization indicators: <code>page_fault_count</code>, <code>peak_working_set_size</code>, <code>working_set_size</code>, <code>quota_peak_paged_pool_usage</code>, <code>quota_paged_pool_usage</code>, <code>quota_peak_non_paged_pool_usage</code>, <code>quota_non_paged_pool_usage</code>, <code>pagefile_usage</code> and <code>peak_pagefile_usage</code>.</p>   <code>tms</code>  <p>An array containing information about the following CPU time utilization indicators: <code>created</code>, <code>kernel</code> and <code>user</code>.</p>
	 * @link http://php.net/manual/en/function.win32-ps-stat-proc.php
	 * @see win32_ps_list_procs()
	 * @since PECL win32ps >= 1.0.1
	 */
	function win32_ps_stat_proc(int $pid = 0): array {}

}
