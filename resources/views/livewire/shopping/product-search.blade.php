<div>
    <div class="mb-10">
        <div class="input-icon mb-10">
            <input type="text" name="search" id="search" value=""
                   wire:model.live="search"
                   class="form-control" placeholder="Buscar" aria-label="Buscar">
            <span class="input-icon-addon">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24"
                                             height="24" viewBox="0 0 24 24" stroke-width="2"
                                             stroke="currentColor" fill="none" stroke-linecap="round"
                                             stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                            <path d="M21 21l-6 -6" />
                                        </svg>
                                    </span>
        </div>
    </div>
    <div class="card" style="margin-top: 20px">
{{--        <div class="card-body border-bottom py-3">--}}
{{--            <div class="d-flex">--}}
{{--                <div class="text-secondary">--}}
{{--                    Listar--}}
{{--                    <div class="mx-2 d-inline-block">--}}
{{--                        <select wire:model.live="perPage" class="form-select form-select-sm" aria-label="result per page">--}}
{{--                            <option value="5">5</option>--}}
{{--                            <option value="10">10</option>--}}
{{--                            <option value="15">15</option>--}}
{{--                            <option value="25">25</option>--}}
{{--                        </select>--}}
{{--                    </div>--}}
{{--                    produtos--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row row-deck row-cards p-3">
            @forelse ($references as $reference)
                <div class="card col-lg-3 m-1 col-sm-1 col-md-4">
                    <a href="{{ route('shopping.product', $reference->id) }}">
                        <img class="rounded-t-lg" src="https://http2.mlstatic.com/D_NQ_NP_2X_693406-MLB54620373230_032023-F.webp" alt="" />
                    </a>
                    <div class="card-header">
                        <div>
                            <h3 class="card-title">
                                {{ $reference->name }}
                            </h3>
                        </div>
                        <div class="card-actions">
                            <x-action.create route="{{ route('shopping.product', $reference->id) }}" />
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <td class="align-middle text-center" colspan="7">
                        No results found
                    </td>
                </tr>
            @endforelse
        </div>
    </div>

</div>
