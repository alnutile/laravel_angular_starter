<?php
/**
 * Created by PhpStorm.
 * User: alfrednutile
 * Date: 6/28/14
 * Time: 2:30 PM
 */

namespace ScreenShooter;

use Symfony\Component\Process\Process;

class QueueExample {
    public function fire($job, $data)
    {
        $total_jobs = count($data['jobs']);
        $thread = $data['thread'];
        $verify_count_of_jobs = $data['job_count'];
        \Log::info("Thread $thread Total Jobs $total_jobs verified as $verify_count_of_jobs");
        $running = [];

        //1. For each item in the group create a process
        $count = 1;
        foreach($data['jobs'] as $run) {
            $process = new Process($run);
            $process->start();
            \Log::info("Running job #$count for thread #$thread");
            $count++;
            $running[] = $process;
        }

        while(count($running) >= $total_jobs) {
            foreach($running as $key => $process)
            {
                if(!$process->isRunning()) {
                    $output = $process->getOutput();
                    \Log::info("Job Output $output for key $key");
                    unset($running[$key]);
                }
            }
        }

        $job->delete();
    }
} 