<?php $__env->startSection('title'); ?>
    <?php echo e(__('Leaderboard')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="btn-group mb-4" role="group" aria-label="<?php echo e(__('All games')); ?>">
        <?php if(Request::get('game') == 'Slots'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Slots']))); ?>" class="btn btn-primary"><?php echo e(__('Slots')); ?></a>
        <?php elseif(Request::get('game') == 'MultiSlots'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'MultiSlots']))); ?>" class="btn btn-primary"><?php echo e(__(config('game-multi-slots.titles')[Request::get('index')] ?? 'Slots')); ?></a>
        <?php elseif(Request::get('game') == 'LuckyWheel'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'LuckyWheel']))); ?>" class="btn btn-primary"><?php echo e(__(config('game-lucky-wheel.variations')[Request::get('index')]->title ?? 'Lucky Wheel')); ?></a>
        <?php elseif(Request::get('game') == 'Dice'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Dice']))); ?>" class="btn btn-primary"><?php echo e(__('Dice')); ?></a>
        <?php elseif(Request::get('game') == 'Blackjack'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Blackjack']))); ?>" class="btn btn-primary"><?php echo e(__('Blackjack')); ?></a>
        <?php elseif(Request::get('game') == 'VideoPoker'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'VideoPoker']))); ?>" class="btn btn-primary"><?php echo e(__('Video Poker')); ?></a>
        <?php elseif(Request::get('game') == 'AmericanRoulette'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanRoulette']))); ?>" class="btn btn-primary"><?php echo e(__('American Roulette')); ?></a>
        <?php elseif(Request::get('game') == 'Roulette'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Roulette']))); ?>" class="btn btn-primary"><?php echo e(__('European Roulette')); ?></a>
        <?php elseif(Request::get('game') == 'AmericanBingo'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanBingo']))); ?>" class="btn btn-primary"><?php echo e(__('75 Ball Bingo')); ?></a>
        <?php elseif(Request::get('game') == 'Keno'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Keno']))); ?>" class="btn btn-primary"><?php echo e(__('Keno')); ?></a>
        <?php else: ?>
            <a href="<?php echo e(route('frontend.leaderboard', request()->query())); ?>" class="btn btn-primary"><?php echo e(__('All games')); ?></a>
        <?php endif; ?>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => NULL, 'index' => NULL]))); ?>"><?php echo e(__('All games')); ?></a>
            <div class="dropdown-divider"></div>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-slots')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Slots']))); ?>">
                <?php echo e(__('Slots')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-multi-slots')): ?>
                <?php $__currentLoopData = config('game-multi-slots.titles'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($title): ?>
                        <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'MultiSlots', 'index' => $index]))); ?>">
                            <?php echo e(__($title)); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-lucky-wheel')): ?>
                <?php $__currentLoopData = config('game-lucky-wheel.variations'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $game): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($title): ?>
                        <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'LuckyWheel', 'index' => $index]))); ?>">
                            <?php echo e(__($game->title)); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-dice')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Dice']))); ?>">
                <?php echo e(__('Dice')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-blackjack')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Blackjack']))); ?>">
                <?php echo e(__('Blackjack')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-video-poker')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'VideoPoker']))); ?>">
                <?php echo e(__('Video Poker')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-roulette')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanRoulette']))); ?>">
                <?php echo e(__('American Roulette')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-roulette')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Roulette']))); ?>">
                <?php echo e(__('European Roulette')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-american-bingo')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'AmericanBingo']))); ?>">
                <?php echo e(__('75 Ball Bingo')); ?>

            </a>
            <?php endif; ?>
            <?php if (\Illuminate\Support\Facades\Blade::check('installed', 'game-keno')): ?>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['game' => 'Keno']))); ?>">
                <?php echo e(__('Keno')); ?>

            </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="btn-group mb-4" role="group" aria-label="<?php echo e(__('All time')); ?>">
        <?php if(Request::get('period') == 'CurrentWeek'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentWeek']))); ?>" class="btn btn-primary"><?php echo e(__('Current week')); ?></a>
        <?php elseif(Request::get('period') == 'CurrentMonth'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentMonth']))); ?>" class="btn btn-primary"><?php echo e(__('Current month')); ?></a>
        <?php elseif(Request::get('period') == 'PreviousMonth'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'PreviousMonth']))); ?>" class="btn btn-primary"><?php echo e(__('Previous month')); ?></a>
        <?php elseif(Request::get('period') == 'CurrentYear'): ?>
            <a href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentYear']))); ?>" class="btn btn-primary"><?php echo e(__('Current year')); ?></a>
        <?php else: ?>
            <a href="<?php echo e(route('frontend.leaderboard', request()->query())); ?>" class="btn btn-primary"><?php echo e(__('All time')); ?></a>
        <?php endif; ?>
        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => NULL]))); ?>"><?php echo e(__('All time')); ?></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentWeek']))); ?>"><?php echo e(__('Current week')); ?></a>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentMonth']))); ?>"><?php echo e(__('Current month')); ?></a>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'PreviousMonth']))); ?>"><?php echo e(__('Previous month')); ?></a>
            <a class="dropdown-item" href="<?php echo e(route('frontend.leaderboard', array_merge(request()->query(), ['period' => 'CurrentYear']))); ?>"><?php echo e(__('Current year')); ?></a>
        </div>
    </div>
    <?php if($users->isEmpty()): ?>
        <div class="alert alert-info" role="alert">
            <?php echo e(__('No data found.')); ?>

        </div>
    <?php else: ?>
        <table class="table table-hover table-stackable">
            <thead>
            <tr>
                <th><?php echo e(__('Rank')); ?></th>
                <th><?php echo e(__('Name')); ?></th>
                <th class="text-right"><?php echo e(__('Games played')); ?></th>
                <th class="text-right"><?php echo e(__('Total bet')); ?></th>
                <th class="text-right"><?php echo e(__('Max win')); ?></th>
                <th class="text-right"><?php echo e(__('Total net win')); ?></th>
                <th class="text-right"><i class="fas fa-arrow-down"></i> <?php echo e(__('Total win')); ?></th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i=> $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td data-title="<?php echo e(__('Rank')); ?>">
                        <?php echo e(++$i + 10 * (max(1, intval(request()->query('page'))) - 1)); ?>

                    </td>
                    <td data-title="<?php echo e(__('Name')); ?>">
                        <a href="<?php echo e(route('frontend.users.show', $user)); ?>">
                            <?php echo e($user->name); ?>

                        </a>
                    </td>
                    <td data-title="<?php echo e(__('Games played')); ?>" class="text-right">
                        <?php echo e($user->_total_games); ?>

                    </td>
                    <td data-title="<?php echo e(__('Total bet')); ?>" class="text-right">
                        <?php echo e($user->_total_bet); ?>

                    </td>
                    <td data-title="<?php echo e(__('Max win')); ?>" class="text-right">
                        <?php echo e($user->_max_win); ?>

                    </td>
                    <td data-title="<?php echo e(__('Total net win')); ?>" class="text-right">
                        <?php echo e($user->_total_net_win); ?>

                    </td>
                    <td data-title="<?php echo e(__('Total win')); ?>" class="text-right">
                        <?php echo e($user->_total_win); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <?php echo e($users->appends(request()->query())->links()); ?>

        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>