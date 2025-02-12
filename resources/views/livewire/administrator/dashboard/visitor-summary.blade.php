<div x-data="{ dropdown: false }">
    <div class="bg-white rounded-lg">
        <div class="px-8 pt-4 flex justify-between items-center">
            <h2 class=" text-xl font-semibold text-slate-800 tracking-wider">Statistik Pengunjung Website</h2>
            <div class="text-sm flex items-center gap-4">
                <span>Pilih Tahun</span>
                <div @click="dropdown = !dropdown" :class="dropdown ? 'bg-gray-100' : ''"
                    class="relative cursor-pointer border flex items-center gap-3 border-slate-700 rounded py-1 ps-4 pe-2 group hover:bg-gray-100 transition-colors">
                    <div>{{ $selectedYear }}</div>
                    <i :class="dropdown ? 'rotate-180' : ''" wire:loading.remove wire:target="setYear"
                        class="fa-solid fa-chevron-down transition-transform"></i>
                    <i wire:loading wire:target="setYear" class="fa-solid fa-circle-notch animate-spin"></i>
                    <div wire:ignore x-show="dropdown" x-cloak
                        class="absolute left-0 top-8 w-[80%] rounded drop-shadow-md z-10 overflow-hidden">
                        @foreach ($years as $item)
                            <div wire:click="setYear({{ $item->year }})"
                                class="{{ $loop->last ? '' : 'border-b border-black/15' }} hover:bg-gray-100 transition-colors text-center p-2 bg-white">
                                {{ $item->year }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>


        <div class=" p-6 grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="grid gap-4 col-span-1">
                <div class="bg-gray-200 rounded-lg px-4 py-2">
                    <p class="text-sm">Harian</p>
                    <p class="text-2xl font-bold">{{ $daily }}</p>
                </div>
                <div class="bg-gray-200 rounded-lg px-4 py-2">
                    <p class="text-sm">Bulanan</p>
                    <p class="text-2xl font-bold">{{ $monthly }}</p>
                </div>
                <div class="bg-gray-200 rounded-lg px-4 py-2">
                    <p class="text-sm">Tahunan</p>
                    <p class="text-2xl font-bold">{{ $yearly }}</p>
                </div>
            </div>
            <div class="grid col-span-3">
                <div class="w-full h-full rounded-lg bg-gray-200">
                    @if ($data->count() > 0)
                        <div wire:ignore id="chart">
                        </div>
                    @else
                        <div class="w-full h-full text-sm flex justify-center items-center">
                            Data tahun yang Anda pilih belum ada/kosong
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        let options = {
            series: [{
                name: 'Total Pengunjung',
                data: {!! $visitorArray !!}
            }],
            chart: {
                height: 350,
                type: 'bar',
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    borderRadius: 10,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function(val) {
                    return val.toLocaleString();
                },
                offsetY: -20,
                style: {
                    fontSize: '12px',
                    colors: ["#304758"]
                }
            },
            xaxis: {
                categories: {!! $categories !!},
                position: 'top',
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: true
                }
            },
            yaxis: {
                show: false
            },
            title: {
                text: 'Grafik Pengunjung Website Tahun ' + new Date().getFullYear(),
                floating: true,
                offsetY: 330,
                align: 'center',
                style: {
                    color: '#555'
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();

        function renderChart(lkategori, lpengunjung) {

            // console.log(lkategori);
            const labels = JSON.parse(lkategori[0]); // Akan menjadi ["Januari", "Februari"]
            const values = JSON.parse(lkategori[1]);

            let options = {
                series: [{
                    name: 'Total Pengunjung',
                    data: values
                }],
                chart: {
                    height: 350,
                    type: 'bar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    bar: {
                        borderRadius: 10,
                        dataLabels: {
                            position: 'top'
                        }
                    }
                },
                dataLabels: {
                    enabled: true,
                    formatter: function(val) {
                        return val.toLocaleString();
                    },
                    offsetY: -20,
                    style: {
                        fontSize: '12px',
                        colors: ["#304758"]
                    }
                },
                xaxis: {
                    categories: labels,
                    position: 'top',
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: true
                    }
                },
                yaxis: {
                    show: false
                },
                title: {
                    text: 'Grafik Pengunjung Website Tahun ' + new Date().getFullYear(),
                    floating: true,
                    offsetY: 330,
                    align: 'center',
                    style: {
                        color: '#555'
                    }
                }
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        }

        document.addEventListener('DOMContentLoaded', function() {
            Livewire.on('updateChart', function(kategori, pengunjung) {
                let lkategori = kategori
                let lpengunjung = pengunjung
                console.log(lkategori, lpengunjung);
                document.querySelector("#chart").innerHTML = "";

                renderChart(lkategori, lpengunjung);
            });

        });
    </script>
@endpush
