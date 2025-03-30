export type User = {
    id: number;
    name: string;
    email: string;
    role: string;
};

export type Role = {
    id: number;
    name: string;
    permissions: Array<Permission>;
};

export type Permission = {
    id: number;
    name: string;
}

export type Integration = {
    id: number;
};
