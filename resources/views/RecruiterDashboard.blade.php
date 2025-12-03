@php
    $dash = 'recruiterdashboard';

    class Person {
        public $rating;
        public $name;
        public $id;
        public $teamworkscore;
        public $projectscore;
        public $timespentscore;
        
        public function __construct($rating, $name, $teamworkscore, $projectscore, $timespentscore) {
            $this->name = $name;
            $this->rating = $rating;
            $this->id = rand();
            $this->teamworkscore = $teamworkscore;
            $this->projectscore = $projectscore;
            $this->timespentscore = $timespentscore;
        }
    }

    $ratingsarray = [
        [0,"Henry Davis", 0, 0, 1],[0,"Ashley Smith", 0, 0, 1],[1,"Reggie Archabald", 0, 1, 0],[1,"David Arnold", 1, 0, 1],[2,"James Verhage", 0, 2, 0],[2,"Anna Reynolds", 0, 1,1],
    [2,"Patrick Holland", 0, 1,1],[2,"Peter Joseph", 0, 2, 0],[3,"Greg Answeisi",3, 2, 3],[3,"Jeremy Jones", 2, 3, 3],[3,"Jay Johna",3, 2, 3],[3,"Natalie Renolds", 2, 3, 3],[4,"Nathan Rolalds", 3, 2, 4]
    ];

    $ratings = []; 

    foreach ($ratingsarray as $x) {
        $p = New Person($x[0], $x[1], $x[2], $x[3], $x[4]);
        array_push($ratings, $p);
    }

    //src="https://unavatar.io/x/calebporzio"

@endphp

<x-layouts.app :title="__('RecruiterDashboard')" :dash=$dash>
    <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
        <div class="relative h-full w-full flex-1 overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
            
            @foreach ($ratings as $rating)
                <div class="flex flex-row rounded-xl border border-neutral-400 dark:border-neutral-600 m-2 p-2 justify-between">
                    <div class="flex flex-row">
                        <flux:avatar/>
                        <p class="mx-2 flex items-center">{{ $rating->name }}</p>
                    </div>
                    <div class="flex flex-row items-center mx-2">
                        <flux:modal.trigger name="view.{{ $rating->id }}">
                            <flux:button>View</flux:button>
                        </flux:modal.trigger>
                        <div class="flex flex-row items-center mx-2">
                            @for ($x=1;$x<=5;$x++)
                                @if ($x > $rating->rating)
                                    <flux:icon.star variant="solid" class="text-amber-500 dark:text-amber-300"/>
                                @else
                                    <flux:icon.star/>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
                <flux:modal name="view.{{ $rating->id }}" class="md:w-96">
                <div class="space-y-6">
                    <div>
                        <flux:heading size="lg">Viewing {{ $rating->name }}</flux:heading>
                        <flux:text>Contact Information: Demo</flux:text>
                    </div>
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row justify-between">
                            <p>Teamwork Score:</p>
                            <div class="flex flex-row">
                                @for ($x=1;$x<=5;$x++)
                                    @if ($x > $rating->teamworkscore)
                                        <flux:icon.star variant="solid" class="text-amber-500 dark:text-amber-300"/>
                                    @else
                                        <flux:icon.star/>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p>Project Score:</p>
                            <div class="flex flex-row">
                                @for ($x=1;$x<=5;$x++)
                                    @if ($x > $rating->projectscore)
                                        <flux:icon.star variant="solid" class="text-amber-500 dark:text-amber-300"/>
                                    @else
                                        <flux:icon.star/>
                                    @endif
                                @endfor
                            </div>
                        </div>
                        <div class="flex flex-row justify-between">
                            <p>Time Spent Applying Score:</p>
                            <div class="flex flex-row">
                                @for ($x=1;$x<=5;$x++)
                                    @if ($x > $rating->timespentscore)
                                        <flux:icon.star variant="solid" class="text-amber-500 dark:text-amber-300"/>
                                    @else
                                        <flux:icon.star/>
                                    @endif
                                @endfor
                            </div>
                        </div>
                    </div>
                    <div>
                        <p>
                            Skills:
                        </p>
                        <p>
                            Demo
                        </p>
                    </div>
                    <div>
                        <p>
                            Previous Projects:
                        </p>
                        <p>
                            Demo 
                        </p>
                    </div>
                    <div>
                        <p>
                            Previous Teammates:
                        </p>
                        <p>
                            Demo 
                        </p>
                    </div>
                </div>
            </flux:modal>
            @endforeach
        </div>
    </div>
</x-layouts.app>


{{-- <div class="grid auto-rows-min gap-4 md:grid-cols-3">
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
            <div class="relative aspect-video overflow-hidden rounded-xl border border-neutral-200 dark:border-neutral-700">
                <x-placeholder-pattern class="absolute inset-0 size-full stroke-gray-900/20 dark:stroke-neutral-100/20" />
            </div>
        </div> --}}