<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Welcome</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex items-center justify-center align-middle w-screen h-screen">
        <div class="flex flex-col items-center">
            <div class="flex flex-col items-center size-fit text-center m-2">
                <h1 class="font-medium text-2xl">Redefine Hiring</h1>
                <h1 class="font-medium text-2xl">Rethink Job Seeking</h1>
                <flux:text class="m-0.5">Find candidates based off their ability, not a piece of paper.</flux:text>
                <flux:text class="m-0.5">Get a job based off what you can do, instead of how well you interview.</flux:text>
            </div>
            <div class="flex flex-row justify-around min-w-[400px] m-0.5">
                <div class="flex flex-col items-center">
                    <flux:button :href="route('recruiterdashboard')" class="w-fit">Recruiters</flux:button>
                    <flux:button href="https://discord.gg/8rU2FXBEj4" target="_blank" class="w-fit">Discord</flux:button>
                </div>
                <div class="flex flex-col items-center">
                    <flux:button :href="route('jobseekerdashboard')" class="w-fit">Job Seekers</flux:button>
                    <flux:button href="https://google.com" target="_blank" class="w-fit">Wiki</flux:button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>