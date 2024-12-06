<div>
    {{-- Session Flash Message --}}
    <x-flash-message></x-flash-message>
    
    <div>
        <div class="w-full flex gap-5 mb-10">
            {{-- Group Title --}}
            <div class="w-1/4 relative">
                <ul class="bg-slate-100 rounded-xl shadow-xl sticky top-28 z-10">
                    @foreach ($groups as $item)
                        <li
                            class="hover:bg-gray-200 active:bg-gray-500 transition-all duration-300 
                        {{ $loop->first ? ' border-b-2' : ($loop->last ? 'rounded-b-xl' : 'border-b-2') }}
                        {{ $selectedGroup === $item->group ? 'bg-gray-200 font-bold' : '' }}">
                            <a href="#" wire:click="selectGroup('{{ $item->group }}')">
                                <div class="p-5 tracking-wider">{{ ucfirst($item->group) }}</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
            {{-- End Group Title --}}


            {{-- Setting Value --}}
            <div class="w-3/4">
                <div class="w-full bg-slate-100 rounded-xl shadow-md">
                    <table class="w-full">
                        <thead class="bg-gray-300 tracking-wider">
                            <th class="w-1/5 px-4 py-2 text-left rounded-tl-xl">Label</th>
                            <th class="w-3/5 px-4 py-2 text-left">Value</th>
                            <th class="w-1/5 px-4 py-2 text-center rounded-tr-xl">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($datas as $data)
                            @if ($selectedGroup)
                                
                            @else
                                
                            @endif
                                <tr wire:loading.remove
                                    class="hover:bg-gray-200 {{ $loop->last ? '' : 'border-b border-gray-200' }}">
                                    <td class="px-4 py-4 text-left flex flex-col">
                                        <div class="text-sm">
                                            {{ $data->label }}
                                        </div>
                                        <div class="text-xs text-gray-500">
                                            {{ $data->key }}
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-left text-sm">
                                        @switch($data->type)
                                            @case('image')
                                                <img src="{{ Storage::url($data->value) }}" alt="{{ $data->label }}">    
                                                @break
                                            @case('input')
                                                {{ $data->value }}    
                                                @break
                                            @case('textarea')
                                                {!! $data->value !!}
                                                @break
                                            @default
                                                
                                        @endswitch

                                    </td>
                                    <td class="w-full px-4 py-4 text-center flex justify-center">
                                        <a href="{{ route('administrator.cms.edit', ['id' => $data->id]) }}"
                                            class="py-[0.15rem] px-[0.40rem] rounded-full border-2 border-slate-700 text-slate-700 hover:text-black hover:shadow-xl hover:bg-slate-300 hover:border-transparent transition-all active:bg-slate-400"
                                            title="Edit {{ $data->label }}">
                                            <i class="fa-solid fa-eye-dropper text-xs"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            <tr wire:loading class=" animate-pulse rounded-b-xl">
                                <td colspan="3" class="p-4 text-center">
                                    Loading <i class="fa-solid fa-spinner fa-spin"></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- End Setting Value --}}
        </div>
    </div>

</div>