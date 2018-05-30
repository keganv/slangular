<?php

namespace Controller;

use Slim\Http\Response;

/**
 * Class ApiController
 * @package Controller
 */
class ApiController extends DefaultController
{
    /**
     * @return Response
     */
    public function index()
    {
        $data = array_merge($this->data, [
            'layout' => 'index',
            'page_title' => 'Users',
        ]);

        return $this->container->get('renderer')->render($this->response, 'base.phtml', $data);
    }

    /**
     * Returns a JSON response of data
     * @return mixed
     */
    public function data()
    {
        // var_dump($this->response);die;

        $data = $this->getIpData();

        return $this->response->withJson($data);
    }

    private function getIpData()
    {
        return [
            [
                "subnet" => "152.178.91.0",
                "cidr" => 28,
                "ips" => [
                    [
                        "ip" => "152.178.91.0",
                        "address_tag" => "<fw_02_spip_4_mgmt_ip>"
                    ], [
                        "ip" => "152.178.91.1",
                        "address_tag" => "<idn_gr_1_primary_uplink_netwk_ip>>"
                    ], [
                        "ip" => "152.178.91.2",
                        "address_tag" => "<idn_gr_1_primary_uplink_broadcast_ip>"
                    ], [
                        "ip" => "152.178.91.3",
                        "address_tag" => "<idn_gr_1_secondary_uplink_netwk_ip>"
                    ], [
                        "ip" => "152.178.91.4",
                        "address_tag" => "<mx960_idn_gr_1_secondary_uplink_ip>"
                    ], [
                        "ip" => "152.178.91.5",
                        "address_tag" => "<idngr_02_idn_gr_1_secondary_uplink_ip>"
                    ], [
                        "ip" => "152.178.91.6",
                        "address_tag" => "<idn_gr_1_secondary_uplink_broadcast_ip>"
                    ], [
                        "ip" => "152.178.91.7",
                        "address_tag" => "<idn_telemetry_broadcast_ip>"
                    ], [
                        "ip" => "152.178.91.8",
                        "address_tag" => "<idn_idn_oam_uplink_vip_ip>"
                    ], [
                        "ip" => "152.178.91.9",
                        "address_tag" => "<mx960_02_idn_oam_uplink_ip>"
                    ], [
                        "ip" => "152.178.91.10",
                        "address_tag" => "<mx960_01_idn_oam_uplink_ip>"
                    ], [
                        "ip" => "152.178.91.11",
                        "address_tag" => "<mx960_idn_oam_uplink_vip_ip>"
                    ], [
                        "ip" => "152.178.91.12",
                        "address_tag" => "<idn_telemetry_netwk_ip>"
                    ], [
                        "ip" => "152.178.91.13",
                        "address_tag" => "<idn_telemetry_broadcast_ip>"
                    ], [
                        "ip" => "152.178.91.14",
                        "address_tag" => "<idn_telemetry_default_gateway_ip>"
                    ], [
                        "ip" => "152.178.91.15",
                        "address_tag" => "<fw_02_mgmt_ip>"
                    ]
                ]
            ], [
                "subnet" => "152.178.92.0",
                "cidr" => 30,
                "ips" => [
                    [
                        "ip" => "152.178.92.0",
                        "address_tag" => "<mx960_primary_idn_untrust_ibgp_ip>"
                    ], [
                        "ip" => "152.178.92.1",
                        "address_tag" => "<idn_untrust_ibgp_netwk_ip>"
                    ], [
                        "ip" => "152.178.92.2",
                        "address_tag" => "<mx960_secondary_idn_untrust_ibgp_ip>"
                    ], [
                        "ip" => "152.178.92.3",
                        "address_tag" => "<idn_untrust_ibgp_broadcast_ip>"
                    ]
                ]
            ], [
                "subnet" => "152.178.93.0",
                "cidr" => 29,
                "ips" => [
                    [
                        "ip" => "152.178.93.0",
                        "address_tag" => "<mx960_02_mgmt_re1_ip>"
                    ], [
                        "ip" => "152.178.93.1",
                        "address_tag" => "<mx960_02_mgmt_re0_ip>"
                    ], [
                        "ip" => "152.178.93.2",
                        "address_tag" => "<mx960_02_mgmt_vip_ip>"
                    ], [
                        "ip" => "152.178.93.3",
                        "address_tag" => "<mx960_01_mgmt_re1_ip>"
                    ], [
                        "ip" => "152.178.93.4",
                        "address_tag" => "<mx960_01_mgmt_re0_ip>"
                    ], [
                        "ip" => "152.178.93.5",
                        "address_tag" => "<mx960_01_mgmt_vip_ip>"
                    ], [
                        "ip" => "152.178.93.6",
                        "address_tag" => "<idn_telemetry_netwk_ip>"
                    ], [
                        "ip" => "152.178.93.7",
                        "address_tag" => "<spip_5_mgmt_broadcast_ip>"
                    ]
                ]
            ]
        ];
    }
}
