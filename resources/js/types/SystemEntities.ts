export type PaginationLinks = {
    first: string | null;
    last: string | null;
    prev: string | null;
    next: string | null;
};

export type CursorPaginationMeta = {
    path: string;
    per_page: string | null;
    next_cursor: string | null;
    prev_cursor: string | null;
};

export type PaginationLink = {
  label: string;
  url: string;
  active: boolean;
};

export type PaginationMeta = {
    current_page: number;
    from: number;
    to: number;
    total: number;
    last_page: number;
    per_page: number;
    path: string;
    links: Array<PaginationLink>;
};

export type CursorPaginatedData<T> = {
    data: Array<T>;
    links: PaginationLinks;
    meta: CursorPaginationMeta;
}

export type PaginatedData<T> = {
    data: Array<T>;
    links: PaginationLinks;
    meta: PaginationMeta;
}
